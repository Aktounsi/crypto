<?php define('_DEFVAR', 1);
session_start();
require('DBconnection.php');
$reqProgress= $bdd->query('SELECT count(*) AS n FROM carte_decompteur WHERE partie_secret!=\'\'');
$rowProgress = $reqProgress->fetch();
$Partage = $rowProgress['n'];

$reqTotal= $bdd->query('SELECT count(*) AS n FROM carte_decompteur');
$rowTotal = $reqTotal->fetch();
$total = $rowTotal['n'];

echo ($Partage)/$total ;


?>