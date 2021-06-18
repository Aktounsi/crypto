<?php define('_DEFVAR', 1); 
        session_start();
        //include('validate_data_function.php');
        include('../DBconnection.php');
        include('../functions.php');

     if(!session_exist()){ exit;
     }else{

        if(is_session_valide($bdd)!='100'){  header('Location: /crypto/'); exit;}
        else{ $_SESSION['active']='1'; include ('../included.php'); include('contentAddCandidat.php'); exit;}

     }
?>