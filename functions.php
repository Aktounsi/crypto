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

        function a_le_droit_de_voter($bdd,$id){
            $req = $bdd->prepare('SELECT  valide FROM carte_votant WHERE ID_votant = ?');
            $req->execute(array(validate_data($id)));
            $result = $req->fetch();
            if($result['valide']=='1') return true;
            return false;
            }

        function session_en_cours($bdd){
            date_default_timezone_set("Africa/Algiers"); 
                $curtime = date("Y-m-d H:i:s");
                $req = $bdd->prepare('SELECT count(*) AS nb_session FROM session_vote WHERE date_debut < ? AND date_fin > ?');
                $req->execute(array($curtime,$curtime));
                $result = $req->fetch();
                if($result['nb_session']!='0') return true;
                return false;
                }

       function vote_fini($bdd){
            date_default_timezone_set("Africa/Algiers"); 
                $curtime = date("Y-m-d H:i:s");
                $req = $bdd->query('SELECT max(date_fin) AS date_fin_dernier_vote FROM session_vote');
                $result = $req->fetch();
                return ($result['date_fin_dernier_vote'] < $curtime);
                } 

      function clef_deja_partage($bdd,$id_decompteur){
                $req = $bdd->prepare('SELECT partie_secret FROM carte_decompteur WHERE ID_decompteur = ?');
                $req->execute(array($id_decompteur));
                $result = $req->fetch();
                return (!preg_match('#^$#',$result['partie_secret']));
                } 
    function secret_construit($bdd){
                $req = $bdd->query('SELECT cle_dechiffrement FROM session_vote WHERE ID_session IN (SELECT max(ID_session) FROM session_vote )');
                $result = $req->fetch();
                return (!preg_match('#^$#',$result['cle_dechiffrement']));
                }   
   function date_delib_arrive($bdd){
                date_default_timezone_set("Africa/Algiers");
                $curtime = date("Y-m-d H:i:s");
                $req = $bdd->query('SELECT date_delib FROM session_vote WHERE ID_session IN (SELECT max(ID_session) FROM session_vote )');
                $result = $req->fetch();
                return ($result['date_delib'] < $curtime);
                }    
    function dernier_decompteur_qui_partage($bdd){
                $req = $bdd->query('SELECT count(ID_decompteur) AS n FROM carte_decompteur WHERE partie_secret=\'\' ');
                $result = $req->fetch();
                return ($result['n']==0);
                }  
    function select_vinqueur($bdd){
                $req = $bdd->query('SELECT choix, max(nb) AS n FROM ( SELECT choix, count(choix) AS nb FROM votes GROUP BY choix ) AS result');
                $result = $req->fetch();
                $reqinfos = $bdd->prepare('SELECT nom, prenom FROM condidat WHERE ID_condidat = ?');
                $reqinfos->execute(array($result['choix']));
                $resultInfos = $reqinfos->fetch();
                return ($result['choix'].'<br>'.$resultInfos['nom'].' '.$resultInfos['prenom'].' <br><br> nombres de voix : '.$result['n']);
                }                                
                                   
                
                
?>