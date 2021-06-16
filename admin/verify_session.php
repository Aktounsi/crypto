<?php defined('_DEFVAR') or exit('Restricted Access');  session_start();
    include('validate_data_function.php');
    
if(  !(isset($_SESSION['id']) ) ||
     !(isset($_SESSION['password'])) ||
     !(isset($_SESSION['type_membre']))  ){
        header('Location: /crypto/');

     }else{
         include('../DBconnection.php'); $verified = 1;

         $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_votant WHERE ID_votant = ? AND mdp = ?');
                $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
                $resultatSession = $reqSession->fetch();
                if($resultatSession['nb']!='0'){$_SESSION['type_membre']=1; header('Location: /crypto/');  }
        $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_signataire WHERE ID_signataire = ? AND mdp = ?');
                $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
                $resultatSession = $reqSession->fetch();
                if($resultatSession['nb']!='0'){$_SESSION['type_membre']=2; header('Location: /crypto/');  }        
        $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_decompteur WHERE ID_decompteur = ? AND mdp = ?');
                $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
                $resultatSession = $reqSession->fetch();
                if($resultatSession['nb']!='0'){$_SESSION['type_membre']=3; header('Location: /crypto/');  }              
          
     } 

?>