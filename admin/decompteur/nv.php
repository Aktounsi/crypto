<?php  define('_DEFVAR', 1);
 require('../DBconnection.php'); 
if( (isset($_POST['id_card'])) &&  (isset($_POST['mdp']))  &&  (isset($_POST['email']))  )

$id_card = $_POST['id_card'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];
$candidat = ucfirst($_POST['candidats']);

$reqAddSession = $bdd->prepare('INSERT INTO carte_decompteur (ID_decompteur,mdp,email,ID_condidat) VALUES (?,?,?,?)');
    $reqAddSession->execute(array($id_card,$mdp,$email,$candidat));   



$response = ['success'=>'Décompteur ajouté avec succès','type'=>'success'];
                        echo json_encode($response);  exit;
     
         

?>