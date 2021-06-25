<?php  define('_DEFVAR', 1); 
include('../functions.php');
//if(!session_exist()) {header('Location: /crypto/'); exit;}
if(isset($_GET['code_user'])) {
    session_start(); 
    require '../DBconnection.php';
    require  '../../vendor/autoload.php';
        ////////////////////////////////////////
        $reqIsVotantValide = $bdd->prepare('SELECT valide FROM carte_votant WHERE ID_votant = ?');
        $reqIsVotantValide->execute(array($_SESSION['id']));
        if($dataIsVotantValide=$reqIsVotantValide->fetch()){  if($dataIsVotantValide['valide']==0) {
            $response = ['success'=>'Vous n\'avez pas le droit de voter','type'=>'error'];
            echo json_encode($response);exit;
        }
        /////////////////////////////////////// 

    $ID_vote = time();
    //Get the public key of the vote session to crypt data (in this case aes key) 
    $reqGetPublicKeySessionVote = $bdd->query('SELECT * FROM session_vote ORDER BY ID_session DESC');
    if(! $rowGetPublicKeySessionVote = $reqGetPublicKeySessionVote->fetch()){
        $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
                echo json_encode($response);exit;
    }
    $publicstr = $rowGetPublicKeySessionVote['cle_chiffrement'];
    $public =  \phpseclib3\Crypt\RSA::load($publicstr);
    
    $reqContenu = $bdd->prepare('SELECT contenu FROM msg WHERE emetteur = ? AND recepteur = ?');
    $reqContenu->execute(array($_GET['code_user'], $_SESSION['id']));
    if(! $rowContenu = $reqContenu->fetch()){
        $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
                echo json_encode($response);exit;
    }
    //chiffrer le vote avec la clé de session_vote $rowContenu['contenu']
    //$vote_chiffre = $rowContenu['contenu'];
    /*$vote_sign = 'koko';
    $cry = '';
    $cry .= $public->encrypt($vote_sign); */
    /*while ($debut < strlen($vote_sign) - 4) { 
        $value = substr($vote_sign,$debut,4);
        $cry .= $public->encrypt($value); 
        $debut = $debut + 4;
    }
    $value = substr($vote_sign,$debut,strlen($vote_sign)%4);
    $cry .= $public->encrypt($value); */
    //$cry = urlencode($cry);
    //inserer dans la table votes
    //generate random AES_key
    $aes_key = ''; 
    $aes_key .= time();
    //crypt the signature_vote and choix with AES_key generated
    $encrypted_vote = openssl_encrypt($_SESSION['vote'], "AES-128-ECB" ,$aes_key);
    $encrypted_signature = openssl_encrypt($rowContenu['contenu'], "AES-128-ECB" ,$aes_key);
    //crypt AES_key with RSA key of session vote
        //$aes_key_crypted = $public->encrypt($aes_key);
        $aes_key_crypted = $aes_key;

    $reqInsertVote = $bdd->prepare('INSERT INTO votes (ID_vote,AES_key_crypted,signature_vote,ID_signataire,choix_crypt) VALUES (?,?,?,?,?)');
    $reqInsertVote->execute(array($ID_vote,$aes_key_crypted, $encrypted_signature, $_GET['code_user'],$encrypted_vote));
    //mettre valide à 0 
    $reqIsVotantValide = $bdd->prepare('UPDATE carte_votant SET valide=0 WHERE ID_votant = ?');
    $reqIsVotantValide->execute(array($_SESSION['id']));
    //delete notification from msg where emetteur signataire and recepteur current_user=votant
    $reqDeleteFromMsg = $bdd->prepare('DELETE FROM msg WHERE emetteur = ? AND recepteur = ?');
    $reqDeleteFromMsg->execute(array($_GET['code_user'], $_SESSION['id']));

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