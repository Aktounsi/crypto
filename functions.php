<?php defined('_DEFVAR') or exit('Restricted Access');
    function validate_data($donnees){
        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;
    }

    function session_exist(){
        return ((isset($_SESSION['id']))   && (isset($_SESSION['password'])) && (isset($_SESSION['type_membre'])) ) ;
    }

    function formulaire_connexion_valide(){
    return (isset($_POST['id']))   && (isset($_POST['password'])) ;
    }

    function  identify($bdd, $id_card,$password){
        if((is_null($id_card)) || (is_null($password))) return -1;

        $req = $bdd->prepare('SELECT  mdp FROM carte_votant WHERE ID_votant = :id');
                $req->execute(array('id' => $id_card));
                $resultat = $req->fetch();
                if(($resultat) && (strcmp($password,$resultat['mdp'])==0)) return 1; //votant_type

        $req = $bdd->prepare('SELECT  mdp FROM carte_signataire WHERE ID_signataire = :id');
                $req->execute(array('id' => $id_card));
                $resultat = $req->fetch();
                if(($resultat) && (strcmp($password,$resultat['mdp'])==0)) return 2; //signataire_type  
                
        $req = $bdd->prepare('SELECT  mdp FROM carte_decompteur WHERE ID_decompteur = :id');
                $req->execute(array('id' => $id_card));
                $resultat = $req->fetch();
                if(($resultat) && (strcmp($password,$resultat['mdp'])==0)) return 3; //decompteur_type


                return 0; //else
    }

    function init_session($id, $password, $type){
        if((is_null($id)) || (is_null($password)) || (is_null($type))) return false;
        $_SESSION['id'] = $id;
        $_SESSION['password'] = $password;
        $_SESSION['type_membre'] = $type;
        return true;
    }

    function is_session_valide($bdd){
        $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_votant WHERE ID_votant = ? AND mdp = ?');
        $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
        $resultatSession = $reqSession->fetch();
        if(($resultatSession['nb']!='0') &&  (validate_data($_SESSION['type_membre'])=='1')) return 1;

        $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_signataire WHERE ID_signataire = ? AND mdp = ?');
        $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
        $resultatSession = $reqSession->fetch();
        if(($resultatSession['nb']!='0') &&  (validate_data($_SESSION['type_membre'])=='2')) return 2;

        $reqSession = $bdd->prepare('SELECT  count(*) AS nb FROM carte_decompteur WHERE ID_decompteur = ? AND mdp = ?');
        $reqSession->execute(array(validate_data($_SESSION['id']), validate_data($_SESSION['password'])     ));
        $resultatSession = $reqSession->fetch();
        if(($resultatSession['nb']!='0') &&  (validate_data($_SESSION['type_membre'])=='3')) return 3;

        return 0;

        }
?>