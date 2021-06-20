<?php define('_DEFVAR', 1); 
        session_start();
        //include('validate_data_function.php');
        include('../DBconnection.php');
        include('../functions.php');
        if (dernier_decompteur_qui_partage($bdd)) echo 'true';
        else echo 'false';

        ?>