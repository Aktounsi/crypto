<?php  define('_DEFVAR', 1); 
if(isset($_GET['code'])) {
    session_start(); 
    require('../DBconnection.php');
        ////////////////////////////////////////
        $reqGetMsg = $bdd->prepare('SELECT * FROM msg WHERE ID_msg = ?');
        $reqGetMsg->execute(array($_GET['code']));
        if($dataGetMsg=$reqGetMsg->fetch()){
        ///////////////////////////////////////

    $reqUpdateVu = $bdd->prepare('DELETE FROM msg WHERE ID_msg = ? ');
    $reqUpdateVu->execute(array($_GET['code'])); 

    //signer le msg $dataGetMsg['contenu']
    
        require  '../../vendor/autoload.php';
        $privatestr = $_SESSION['private_key'];
        try {
            $private = \phpseclib3\Crypt\RSA::load($privatestr);
        }
        catch(Exception $e) {
            $response = ['success'=>'La clé est erronée !','type'=>'error'];
                echo json_encode($response);  exit;
        }
        //$public = $private->getPublicKey(); 
        $contenu = $dataGetMsg['contenu'];
        $msg_sign = $private->sign($contenu);
        $msg_sign = urlencode($msg_sign);
        //echo $public->verify($plaintext, $signature) ? 'verified' : 'unverified';
 
    
    //inserer dans les messages du votant
    $ID_msg = time();
    $reqUpdateVu = $bdd->prepare('INSERT INTO msg (ID_msg,emetteur,recepteur,contenu) VALUES (?,?,?,?)');
    $reqUpdateVu->execute(array($ID_msg, $_SESSION['id'], $dataGetMsg['emetteur'], $msg_sign));

    $response = ['success'=>'vote signé avec suucès !','type'=>'success'];
                        echo json_encode($response);exit;
        }else{  $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
                echo json_encode($response);exit; 
        }
 }else{
    $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
    echo json_encode($response);exit;

 }
 

      ?>