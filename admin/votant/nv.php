<?php  define('_DEFVAR', 1);
 require('../DBconnection.php'); 
if( (isset($_POST['id_card'])) &&  (isset($_POST['mdp']))  &&  (isset($_POST['email']))  )
{
$id_card = $_POST['id_card'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$reqAddSession = $bdd->prepare('INSERT INTO carte_votant (ID_votant,mdp,email) VALUES (?,?,?)');
    $reqAddSession->execute(array($id_card,$mdp,$email));  
 //send private key in mail   
 $destinataire = $email;
 $sujet = "Activer votre compte" ;
 $entete = "From:aktounsi@gmail.com" ;
 
// Le lien d'activation est composé du login(log) et de la clé(cle)
 $message = 'Bienvenue sur VotreSite,
  Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
  ou copier/coller dans votre navigateur Internet.
  ---------------
Ceci est un mail automatique, Merci de ne pas y répondre.';
$message = wordwrap($message,70);
 
 
if(mail($destinataire, $sujet, $message, $entete)) { // Envoi du mail
$response = ['success'=>'Votant ajouté avec succès, veillez consulter votre email afin d\'obrenir votre clé privée!','type'=>'success'];
                        echo json_encode($response);  exit;}else{
                            $response = ['success'=>'failed','type'=>'error'];
                        echo json_encode($response);  exit;
                        }
     
                    }

?>