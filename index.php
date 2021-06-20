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
                if(identify($bdd, $id,$password)=='1') {init_session($id, $password, 1);
                                    header('Location: /crypto/'); 
                                    exit;}
 //***************************signataire/*************************************/    
                if(identify($bdd, $id,$password)=='2') {init_session($id, $password, 2);
                    header('Location: /crypto/'); 
                    exit;}
/*************************décompteur ****************************************/
                if(identify($bdd, $id,$password)=='3') {init_session($id, $password, 3);
                    header('Location: /crypto/'); 
                    exit;}

/**************************connection_failed********************************/
                include('yet.php');
/***************************************************************************/

        }else{  include('notyet.php'); }
     }else{

        if(is_session_valide($bdd)=='1'){ if(a_le_droit_de_voter($bdd,$_SESSION['id']) &&  (session_en_cours($bdd))){  include ('contentVotant.php');}
                                                      elseif( (session_en_cours($bdd))  &&  (!a_le_droit_de_voter($bdd,$_SESSION['id'])) ){include ('included.php'); include ('VousNAvezPasLeDroit.php');}
                                                      else{ include ('included.php'); include ('PasDeSessionEnCours.php');} exit;}
        if(is_session_valide($bdd)=='2'){  include ('contentSignataire.php');  exit;}
        if(is_session_valide($bdd)=='3'){  if(session_en_cours($bdd)){ include ('sessionEnCours.php'); }else{ include ('contentDecompteur.php'); } exit;}
        include('notyet.php');
     }
?>
