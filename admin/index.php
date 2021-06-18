<?php define('_DEFVAR', 1); 
        session_start();
        //include('validate_data_function.php');
        include('DBconnection.php');
        include('functions.php');

     if(!session_exist()){  
        if(formulaire_connexion_valide()){
            $id = validate_data($_POST['id']);
            $password = validate_data($_POST['password']);
/*/**************************votant /**************************/
                

                //$hash = password_hash($resultat['mdp'])
                // Comparaison du pass envoyé via le formulaire avec la base
                //$isPasswordCorrect = password_verify($password, $hash);
                /*$isPasswordCorrect = strcmp($password, $resultat['mdp']);
                $type_membre = 0;*/
                if(identify($bdd, $id,$password)) {init_session($id, $password, 100); $_SESSION['active']='0'; //100 pour admin
                                    header('Location: /crypto/admin/'); 
                                    exit;}
               else{
                include('yet.php'); /*****connection_failed**********/
               }
/***************************************************************************/

        }else{  include('notyet.php'); }
     }else{

        if(is_session_valide($bdd)!='100'){  header('Location: /crypto/'); exit;}
        else{ $_SESSION['active']='0'; include ('included.php'); include('contentAdmin.php'); exit;}
        include('notyet.php');

     }
?>
