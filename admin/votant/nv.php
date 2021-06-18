<?php  define('_DEFVAR', 1);
 require('../DBconnection.php'); 
if( (isset($_POST['id_card'])) &&  (isset($_POST['mdp']))  &&  (isset($_POST['email']))  )

$id_card = $_POST['id_card'];
$mdp = $_POST['mdp'];
$email = $_POST['email'];

$reqAddSession = $bdd->prepare('INSERT INTO carte_votant (ID_votant,mdp,email) VALUES (?,?,?)');
    $reqAddSession->execute(array($id_card,$mdp,$email));   



$response = ['success'=>'Signataire ajouté avec succès','type'=>'success'];
                        echo json_encode($response);  exit;
     
         

?>