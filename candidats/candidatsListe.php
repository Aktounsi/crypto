<?php  defined('_DEFVAR') or exit('Restricted Access');
//define('_DEFVAR', 1);
    //require('../DBconnection.php');
    $reqNombre = $bdd->query('SELECT  count(*) AS n from condidat');
    $nombrerow = $reqNombre->fetch(PDO::FETCH_ASSOC);
    $nombreCandidats = $nombrerow['n'];
    $nombrePages = (int) ($nombreCandidats/3);
    $reste = ($nombreCandidats%3);
    if($reste==0){$nombrePages--;}
    if((!isset($_GET['page']) )  ||  (!is_numeric($_GET['page']))  ||  ($_GET['page'] < 0) ){$page=0;}
    else{  if($_GET['page'] > $nombrePages){$page = $nombrePages;}else{$page=$_GET['page'];}}      
    

     $req = $bdd->prepare('SELECT * FROM condidat  ORDER BY ID_condidat DESC LIMIT :debut ,3 ');    
     /* Pour les req préparées avec LIMIT on doit passer par bindParam() Si on a opté pour PDO*/
     $debut = $page*3;
     $req->bindParam(':debut', $debut, PDO::PARAM_INT); 
     $req->execute();                    
                                 
       if((!($donnees = $req->fetch()))  &&  ($page != 0)  ){die ('404 PAGE NOT FOUND');}

        
    ?>   <?php 
            while ($donnees)
            {
            ?>

<a class="card candidat"  href="candidats/vote.php">
      <div class="card-image grid-item" ><img src="images/candidat.jpg" alt=""></div>
      <div class="card-text">
        
        <h2> <?php   echo 'candidat numéro '. $donnees['ID_condidat'];   ?> </h2> 
        
      </div>
      <div class="card-stats">
        <div class="stat">
          <div class="value"><?php   echo $donnees['ID_condidat'];   ?> </div>
        </div>
        <div class="stat">
          <div class="value"><?php   echo $donnees['nom'];  ?> </div>
          <div class="type"><?php   echo $donnees['prenom'];   ?></div>
        </div>
      </div>
            </a>

<br>

    
    <?php $donnees = $req->fetch(); } $req->closeCursor();   ?> </table>
                <br><br><br><br>
                <?php if($page>1)  {  ?>
        <a class="chevron"  href="/crypto/?page=<?php echo ($page-1); ?>"><img src="/crypto/images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>" 
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="/crypto/images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==1)  {  ?>
        <a class="chevron"  href="/crypto/"><img src="/crypto/images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>"
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="/crypto/images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==0)  {  ?>
        <a class="chevrond" disabled><img src="/crypto/images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>" <?php }else{ ?>class="chevrond" <?php } ?>>
            <img style="width:20px;height:20px;" src="/crypto/images/next.png" alt=""></a>
        <?php }  ?>