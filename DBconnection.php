<?php defined('_DEFVAR') or exit('Restricted Access');
try{$bdd = new PDO('mysql:host=localhost;dbname=crypto;charset=utf8;port=3308','root','1251');
            } 
            catch(Exception $e){
                die('erreur de connexion à la bdd : '.$e->getMessage());
            }
            ?>