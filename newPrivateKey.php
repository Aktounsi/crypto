<?php define('_DEFVAR', 1); session_start();
include('functions.php');
if( isset($_POST['private_key']) &&  session_exist() ){
 require('DBconnection.php'); 

 require  '../vendor/autoload.php';
 $privatestr = $_POST['private_key'];

 try {
    $private = \phpseclib3\Crypt\RSA::load($privatestr);
  }
  catch(Exception $e) {
    $response = ['success'=>'La clé est erronée !','type'=>'error'];
        echo json_encode($response);  exit;
  }

 $public = $private->getPublicKey(); 
 if(is_session_valide($bdd)=='1'){ 
     $reqPublicKey = $bdd->prepare('SELECT public_key FROM carte_votant WHERE ID_votant = ?');
    $reqPublicKey->execute(array($_SESSION['id']));}
 if(is_session_valide($bdd)=='2'){
    $reqPublicKey = $bdd->prepare('SELECT public_key FROM carte_signataire WHERE ID_signataire = ?');
    $reqPublicKey->execute(array($_SESSION['id']));
 }
 if(is_session_valide($bdd)=='3'){
    $reqPublicKey = $bdd->prepare('SELECT public_key FROM carte_decompteur WHERE ID_decompteur = ?');
    $reqPublicKey->execute(array($_SESSION['id']));
 }
 //session non valide you should kill session to force disconnection
 if(!in_array(is_session_valide($bdd),array('1','2','3'))) exit;

 if(! $rowPublicKey = $reqPublicKey->fetch()) exit;
 $pubKeyFromDB = \phpseclib3\Crypt\RSA::load($rowPublicKey['public_key']);
 if( $pubKeyFromDB == $public ){
     $_SESSION['private_key'] = $_POST['private_key'];
     $response = ['success'=>'Clé valide','type'=>'success'];
     echo json_encode($response);  exit;
    }else{
        $response = ['success'=>'La clé est erronée !!','type'=>'error'];
        echo json_encode($response);  exit; 
    }

}else{
    $response = ['success'=>'Champ non valide','type'=>'error'];
     echo json_encode($response);  exit; 
}

?>  