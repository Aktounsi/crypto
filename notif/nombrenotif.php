<?php define('_DEFVAR', 1);
session_start();
require('../DBconnection.php');
if(isset($_SESSION['id'])){

$reqNbNotif= $bdd->prepare('SELECT count(*) AS n FROM msg WHERE recepteur=?');
$reqNbNotif->execute(array($_SESSION['id']));
$rowNbNotif = $reqNbNotif->fetch();
echo $rowNbNotif['n'];}else{echo '0';}

?>