<?php  define('_DEFVAR', 1); 
include('../functions.php');
//if(!session_exist()) {header('Location: /crypto/'); exit;}
if(isset($_GET['choix'])  &&  isset($_GET['code_user'])) {
    session_start(); 
    require('../DBconnection.php');
        ////////////////////////////////////////
        $reqIsVotantValide = $bdd->prepare('SELECT valide FROM carte_votant WHERE ID_votant = ?');
        $reqIsVotantValide->execute(array($_SESSION['id']));
        if($dataIsVotantValide=$reqIsVotantValide->fetch()){  if($dataIsVotantValide['valide']==0) {
            $response = ['success'=>'Vous n\'avez pas le droit de voter','type'=>'error'];
            echo json_encode($response);exit;
        }
        /////////////////////////////////////// 

    //chiffrer le vote avec la clé de session_vote $_GET['choix']
    $vote_chiffre = $_GET['choix'];
    //inserer dans la table votes
    $ID_vote = time();
    $reqUpdateVu = $bdd->prepare('INSERT INTO votes (ID_vote,choix,ID_signataire) VALUES (?,?,?)');
    $reqUpdateVu->execute(array($ID_vote, $vote_chiffre, $_GET['code_user']));
    //mettre valide à 0 
    $reqIsVotantValide = $bdd->prepare('UPDATE carte_votant SET valide=0 WHERE ID_votant = ?');
    $reqIsVotantValide->execute(array($_SESSION['id']));
    //delete notification from msg where emetteur signataire and recepteur current_user=votant
    $reqIsVotantValide = $bdd->prepare('DELETE FROM msg WHERE emetteur = ? AND recepteur = ?');
    $reqIsVotantValide->execute(array($_GET['code_user'], $_SESSION['id']));

    $response = ['success'=>'Opération de vote terminée avec suucès ! ID_Vote ='.$ID_vote,'type'=>'success'];
                        echo json_encode($response);exit;
        }else{  $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
                echo json_encode($response);exit; 
        }
 }else{
    $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
    echo json_encode($response);exit;

 }
 

      ?>