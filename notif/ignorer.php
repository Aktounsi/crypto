<?php  define('_DEFVAR', 1); 
if(isset($_GET['code'])) {
    
    require('../DBconnection.php');
    $reqUpdateVu = $bdd->prepare('DELETE FROM msg WHERE ID_msg = ? ');
    $reqUpdateVu->execute(array($_GET['code'])); 
 
    $response = ['success'=>'vote ignoré !','type'=>'success'];
                        echo json_encode($response);exit;

 }else{
    $response = ['success'=>'Une erreur s\'est produite','type'=>'error'];
    echo json_encode($response);exit;
 }
      ?>