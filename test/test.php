<?php define('_DEFVAR', 1); 
        session_start();
        //include('validate_data_function.php');
        include('../DBconnection.php');
        include('../functions.php');
        if (session_en_cours($bdd)) echo 'true';
        else echo 'false';

        ?>