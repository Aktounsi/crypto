<?php
define('_DEFVAR', 1);
session_start();
require('../DBconnection.php'); 

$a_deja_envoyer_au_signataire = $bdd->prepare('SELECT count(*) AS n FROM msg WHERE emetteur = ?');
$a_deja_envoyer_au_signataire->execute(array($_SESSION['id']));
if($donnees=$a_deja_envoyer_au_signataire->fetch()){  
    if($donnees['n'] != 0){
        $response = ['success'=>'Vous avez déjà effectuer votre choix, Veillez attendre la signature !','type'=>'error'];
        echo json_encode($response);  exit;
    }
}


if( isset($_GET['id_candidat']) ){
    $contenu = $_GET['id_candidat'];
    $ID_msg = time();
    $response = $bdd->query('SELECT ID_signataire FROM carte_signataire LIMIT 0,1');
    if($data=$response->fetch()) $recep = $data['ID_signataire'];
    $reqAddSession = $bdd->prepare('INSERT INTO msg (ID_msg,emetteur,recepteur,contenu) VALUES (?,?,?,?)');
    $reqAddSession->execute(array($ID_msg,$_SESSION['id'],$recep,$contenu));

    $response = ['success'=>'Votre vote a été envoyé avec succès au signataire, une fois signé vous receverez une notification afin de valider votre choix!','type'=>'success'];
    echo json_encode($response);exit; 
}else{
    $response = ['success'=>'Une erreur s\'est produite !','type'=>'error'];
    echo json_encode($response);  exit;  
}



?>