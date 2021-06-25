<?php define('_DEFVAR', 1);
 require('../DBconnection.php'); 
 require  '../../../vendor/autoload.php';
 use TQ\Shamir\Secret;

 $private = \phpseclib3\Crypt\RSA::createKey();
 $public = $private->getPublicKey();
function validateDate($date, $format = 'Y-m-d H:i:s'){
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
    $reqAddSession = $bdd->prepare('INSERT INTO session_vote (ID_session,date_debut,date_fin,date_delib,cle_chiffrement) VALUES (?,?,?,?,?)');
    $reqAddSession->execute(array($ID_session,$date_debut,$date_fin,$date_delib,$public));
    //générer la clé de chiffrement et déchiffrement de la session de vote
    //découper la clé privée et partager chaque morceau à une partie rq: on a définie la seuil = 3, mais dans le cas général s = nb_parties
    $reqGetNumberOfParties = $bdd->query('SELECT count(*) AS nb FROM carte_decompteur');
    $rowGetNumberOfParties = $reqGetNumberOfParties->fetch();
    $shares = Secret::share($private, $rowGetNumberOfParties['nb'], 3);

    $reqGetEmails = $bdd->query('SELECT ID_decompteur, email FROM carte_decompteur'); $i=0;
    while( $rowGetEmails = $reqGetEmails->fetch() ){
        $destinataire = $rowGetEmails['email'];
        $sujet = "Partage de secret au decompteur numéro :".$rowGetEmails['ID_decompteur'];
        $entete = "From:aktounsi@gmail.com" ;
        $message = 'Ci-joint votre secret (une partie de la clé de déchiffrement des votes), Comme vous avez été désigné comme décompteur dans le vote électronique, 
        Important : ce secret ne doit pas être divulgué avant la fin de la session de vote, vous l\'en avez besoin afin de participer au dépouillement.
        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre. <br>'.$shares[$i]; $i++;
        $message = wordwrap($message,70);
        if(!mail($destinataire, $sujet, $message, $entete)) { 
            // Envoi du mail
            $response = ['success'=>'failed','type'=>'error'];
            echo json_encode($response);  exit;
        }

    }

    $response = ['success'=>'Session ajoutée avec succès, La clé de déchiffrement des votes a été divisée en parties dont chaque partie a été envoyé à un décompteur par email!','type'=>'success'];
    echo json_encode($response);  exit;


}


?>                        