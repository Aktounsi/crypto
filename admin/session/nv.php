<?php define('_DEFVAR', 1);
 require('../DBconnection.php'); 

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function valide_data($debut, $fin, $delib){
    return ( isset($_POST['date_debut'])  &&  isset($_POST['date_fin'])  &&  isset($_POST['date_delib']) &&
            validateDate($_POST['date_debut'].' '.$_POST['heure_debut'])  &&
            validateDate($_POST['date_fin'].' '.$_POST['heure_fin'])  &&
            validateDate($_POST['date_delib'].' '.$_POST['heure_delib'])  
        );
}
if( !valide_data($_POST['date_debut'],$_POST['date_fin'],$_POST['date_delib']) ){
    $response = ['success'=>'Veillez remplir les champs correctement! ','type'=>'error'];
    echo json_encode($response);  exit; 
}else{
    $ID_session = time();
    $date_debut = $_POST['date_debut'].' '.$_POST['heure_debut'];
    $date_fin = $_POST['date_fin'].' '.$_POST['heure_fin'];
    $date_delib = $_POST['date_delib'].' '.$_POST['heure_delib'];
    $reqAddSession = $bdd->prepare('INSERT INTO session_vote (ID_session,date_debut,date_fin,date_delib) VALUES (?,?,?,?)');
    $reqAddSession->execute(array($ID_session,$date_debut,$date_fin,$date_delib));

    $response = ['success'=>'Session ajouté avec succès!','type'=>'success'];
    echo json_encode($response);  exit;  
}


?>                        