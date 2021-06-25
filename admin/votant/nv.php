<?php  define('_DEFVAR', 1);
 require('../DBconnection.php');
 require  '../../../vendor/autoload.php';
 $private = \phpseclib3\Crypt\RSA::createKey();
 $public = $private->getPublicKey(); 
if( (isset($_POST['id_card'])) &&  (isset($_POST['mdp']))  &&  (isset($_POST['email']))  )
{
$id_card = $_POST['id_card'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$reqAddSession = $bdd->prepare('INSERT INTO carte_votant (ID_votant,mdp,email,public_key) VALUES (?,?,?,?)');
    $reqAddSession->execute(array($id_card,$mdp,$email,$public));  
 //send private key in mail   
 $destinataire = $email;
 $sujet = "Inscription au vote électronique votant numéro : ". $id_card ;
 $entete = "From:aktounsi@gmail.com" ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
 $message = 'Vous avez été inscris au vote électronique,
  Important : vous trouvez ci-desous votre clé privé, votre clé privé doit être gardée secrete, vous l\'en avez besoin afin d\'accéder à votre compte.
  ---------------
Ceci est un mail automatique, Merci de ne pas y répondre. <br>'.$private;
$message = wordwrap($message,70);
 
 
if(mail($destinataire, $sujet, $message, $entete)) { // Envoi du mail
$response = ['success'=>'Votant ajouté avec succès, La clé privée a été envoyé à l\'email mentionné!','type'=>'success'];
                        echo json_encode($response);  exit;}else{
                            $response = ['success'=>'failed','type'=>'error'];
                        echo json_encode($response);  exit;
                        }
     
                    }

?>