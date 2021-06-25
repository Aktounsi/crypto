<?php  define('_DEFVAR', 1); 
if(isset($_GET['id_signataire'])) {
require  '../../vendor/autoload.php';
require '../DBconnection.php';

$reqGetPublicKeySignataire = $bdd->prepare('SELECT public_key FROM carte_signataire WHERE ID_signataire = ?');
        $reqGetPublicKeySignataire->execute(array($_GET['id_signataire']));
        if($rowPublicKeySignataire=$reqGetPublicKeySignataire->fetch()){ 
            $publicstr = $rowPublicKeySignataire['public_key'];
                try {
                    $public = \phpseclib3\Crypt\RSA::load($publicstr);
                }
                catch(Exception $e) {
                    $response = ['success'=>'Une erreur s\'est produite !','type'=>'error'];
                        echo json_encode($response);  exit;
                }
                $signature = urldecode($_POST['signature']);
            if( $public->verify($_POST['voteEnClair'], $signature) ){
                $response = ['success'=>'Signature Vérifiée','type'=>'success'];
                echo json_encode($response);  exit;
            }else{
                $response = ['success'=>'La signature n\'est pas la bonne !','type'=>'error'];
                echo json_encode($response);  exit;
            } 
        }

//echo $public->verify('4', $msg_sign) ? 'verified' : 'unverified';

}else{
        $response = ['success'=>'Une erreur s\'est produite !','type'=>'error'];
        echo json_encode($response);  exit; 

    }

?>