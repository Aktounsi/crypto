<?php  defined('_DEFVAR') or exit('Restricted Access');
    //require('../connexionbdd.php');
    $reqNombre = $bdd->query('SELECT  count(*) AS n from votes');
    $nombrerow = $reqNombre->fetch(PDO::FETCH_ASSOC);
    $nombreVotes = $nombrerow['n'];
    $nombrePages = (int) ($nombreVotes/10);
    $reste = ($nombreVotes%10);
    if($reste==0){$nombrePages--;}
    if((!isset($_GET['page']) )  ||  (!is_numeric($_GET['page']))  ||  ($_GET['page'] < 0) ){$page=0;}
    else{  if($_GET['page'] > $nombrePages){$page = $nombrePages;}else{$page=$_GET['page'];}}      
    

     $req = $bdd->prepare('SELECT * FROM votes ORDER BY ID_vote DESC LIMIT :debut ,10 ');    
     /* Pour les req préparées avec LIMIT on doit passer par bindParam() Si on a opté pour PDO*/
     $debut = $page*10;
     $req->bindParam(':debut', $debut, PDO::PARAM_INT); 
     $req->execute();                    
                                 
       if((!($donnees = $req->fetch()))  &&  ($page != 0)  ){die ('404 PAGE NOT FOUND');}

        
    ?> 
    <tr>  <?php 
            while ($donnees)
            { // déchiffrer le choix avec la clef de déchiffrement de la session calculé avec le calcul multipartie
                $choix = $donnees['choix'];
            ?>
            <td style="Text-decoration-line:underline;">  <?php   echo $donnees['ID_vote'];    ?>#  </td>
            <td> <?php   echo $choix;    ?> </td>
    </tr>
    <?php $donnees = $req->fetch(); } $req->closeCursor();     ?> </table>
                <br><br><br><br>
                <?php if($page>1)  {  ?>
        <a class="chevron"  href="/crypto/?page=<?php echo ($page-1); ?>"><img src="images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>" 
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==1)  {  ?>
        <a class="chevron"  href="/crypto/"><img src="images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>"
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==0)  {  ?>
        <a class="chevrond" disabled><img src="images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages)) { ?>class="chevron" href="/crypto/?page=<?php echo ($page+1); ?>" <?php }else{ ?>class="chevrond" <?php } ?>>
            <img style="width:20px;height:20px;" src="images/next.png" alt=""></a>
        <?php }  ?>