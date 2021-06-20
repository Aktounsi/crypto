<?php 
define('_DEFVAR', 1); session_start(); include ('included.php'); ?>
<div id="contenu" >
<div class="container">
<h2> Notifications</h2><br> 
<ul>

<?php 
include('../DBconnection.php');
include('../functions.php');
if(!session_exist()) {header('Location: /crypto/'); exit;}

if(is_session_valide($bdd)=='1'){ 
    if(a_le_droit_de_voter($bdd,$_SESSION['id']) &&  (session_en_cours($bdd))){  include ('notifVotant.php');}
    elseif(!a_le_droit_de_voter($bdd,$_SESSION['id'])){header('Location: /crypto/');}
    else{ header('Location: /crypto/');}
}
elseif(is_session_valide($bdd)=='2'){ if(!session_en_cours($bdd)){ header('Location: /crypto/'); }else{ include ('notifSignataire.php');  } }
elseif(is_session_valide($bdd)=='3'){  if(session_en_cours($bdd)){ header('Location: /crypto/'); }else{ include ('notifDecompteur.php'); } }
else{header('Location: /crypto/');}

?>


<script src="confirm_action.js"></script>
<script src="../nbNotif.js"></script>

    
</body>
</html>