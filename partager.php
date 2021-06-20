<?php define('_DEFVAR', 1); session_start();
 require('DBconnection.php'); 
 require('functions.php'); 
 if(isset($_POST['secret_partie'])){
    if(vote_fini($bdd)){
        $reqPartageClef = $bdd->prepare('UPDATE carte_decompteur SET partie_secret = ? WHERE ID_decompteur = ?');
        $reqPartageClef->execute(array($_POST['secret_partie'],$_SESSION['id']));
        if(dernier_decompteur_qui_partage($bdd)){
            //effectuer le calcul multipartie de la clef stocké dans la variable $calculMultiPartie and PUSH to database
            $calculMultiPartie = 'pour un premier temps, cette chaine contient un text';
            $reqPartageClef = $bdd->prepare('UPDATE session_vote SET cle_dechiffrement = ? WHERE ID_session IN (SELECT max(ID_session) FROM session_vote)');
            $reqPartageClef->execute(array($calculMultiPartie));
        }
        $response = ['success'=>'Secret partagé avec succès, vous receverez une notification dès que les autres parties partagent leurs secrets!','type'=>'success'];
        echo json_encode($response);  exit;

    }else{
        $response = ['success'=>'Le vote n\'a pas encore terminé!','type'=>'error'];
        echo json_encode($response);  exit;

    }
 }else{
    $response = ['success'=>'Une erreur s\'est produite!','type'=>'error'];
    echo json_encode($response);  exit;

 }

?>