<?php  define('_DEFVAR', 1);
 require('../DBconnection.php'); 
 function valide_data ($nom,$prenom){
     return ((isset($nom))  && (isset($prenom)) &&  (preg_match('#^[a-zA-Z]+$#',$nom)) &&  (preg_match('#^[a-zA-Z]+$#',$prenom)));
 }
if( valide_data($_POST['nom'],$_POST['prenom'])  ){

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

if(!empty($_FILES)){
            $file_name = $_FILES['pic']['name'];
            $file_tmp_name = $_FILES['pic']['tmp_name'];
            $file_type = $_FILES['pic']['type'];
            $file_extension = strrchr($file_name,".");
            $file_size = $_FILES['pic']['size'];

            $extension_autorisees = array('.png','.jpg');
            define ('SITE_ROOT', realpath(dirname(__FILE__)));
            $timestamp = time();
            $file_name = $timestamp.'_'.$file_name;
            $destination = SITE_ROOT.'/images/'.$file_name;
    

    if(in_array(strtolower($file_extension),$extension_autorisees)){

        if($_FILES['pic']['error']==0){
                if(move_uploaded_file($file_tmp_name,$destination)){
                    //inserer une référence dans la bdd
                    $reqAddCandidat = $bdd->prepare('INSERT INTO condidat (nom,prenom,uri_photo) VALUES (?,?,?)');
                    $reqAddCandidat->execute(array($nom,$prenom,$destination));

                $response = ['success'=>'Candidat ajouté avec succès','type'=>'success'];
                                echo json_encode($response);  exit;
                }else{
                    $response = ['success'=>'Une erreur est survenue lors de l\'envoi du fichier !1','type'=>'error'];
                                        echo json_encode($response);  exit;
                }
            }else{$response = ['success'=>'Une erreur est survenue lors de l\'envoi du fichier !2','type'=>'error'];
                echo json_encode($response);  exit;}

    }else{
        $ext_autoris = implode (', ', $extension_autorisees);
        $response = ['success'=>'Seul les fichiers ('. $ext_autoris .') sont autorisés !','type'=>'error'];
                        echo json_encode($response);  exit;
    }
}else{
    $reqAddCandidat = $bdd->prepare('INSERT INTO condidat (nom,prenom) VALUES (?,?)');
                    $reqAddCandidat->execute(array($nom,$prenom));
                    $response = ['success'=>'Candidat ajouté avec succès','type'=>'success'];
                                echo json_encode($response);  exit;

}
}else{
    $response = ['success'=>'Veillez remplir les champs correctement !!','type'=>'error'];
                        echo json_encode($response);  exit;
}

?>