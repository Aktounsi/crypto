<?php     
    if(!isset($_GET['page']) ) {$page=0;} else{ $page=$_GET['page'];}  

     $req = $bdd->query('SELECT * FROM msg WHERE recepteur =\'' . $_SESSION['id'] . '\' 
                         ORDER BY ID_msg DESC LIMIT ' . $page*5 .' ,5
                         ');
    $reqNombre = $bdd->query('SELECT count(*) AS n from msg
                                WHERE recepteur=\'' . $_SESSION['id'] . '\' ');
    $nombrerow = $reqNombre->fetch(PDO::FETCH_ASSOC);
    $nombreNotif = $nombrerow['n'];
    $nombrePages = ($nombreNotif/5);
                         
                        
       if(!($donnees = $req->fetch())){die ('404 PAGE NOT FOUND');}

        
                         
    while ($donnees)
    {
    ?>
    <li style="border-bottom:1px solid rgb(196,196,196);">
        <h3>
            <?php    echo "Vote"; ?> 
        </h3>
        <p> 

        <?php echo '<strong style="color:black;font-weight:bold;">#ID_votant : ' . $donnees['emetteur'] . '</strong>'; ?> <br>    
        <?php echo '<strong style="color:black;font-weight:bold;">vote brouillé : ' . $donnees['contenu'] . '</strong>'; ?> 
            
        </p>
       <br>
        <p style="margin-left:25%;"> 
            
            <a href="Signer.php?code=<?php echo $donnees['ID_msg']; ?>&code_user=<?php echo $_SESSION['id']; ?>&page=<?php echo $page; ?>" class="link"> <button class="btn btn-success"> Signer</button></a> 
            <a href="ignorer.php?code=<?php echo $donnees['ID_msg']; ?>&code_user=<?php echo $_SESSION['id']; ?>&page=<?php echo $page; ?>" class="link"> <button class="btn btn-success"> Ignorer</button></a> 
        
        </li>
        <?php $donnees = $req->fetch(); } $req->closeCursor();     ?>
                <br><br><br><br>
        <?php if($page>1)  {  ?>
        <a class="chevron"  href="index.php?page= <?php echo ($page-1); ?>"><img src="../images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages - 1)) { ?>class="chevron" href="index.php?page= <?php echo ($page+1); ?>" 
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="../images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==1)  {  ?>
        <a class="chevron"  href="index.php"><img src="../images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages - 1)) { ?>class="chevron" href="index.php?page= <?php echo ($page+1); ?>"
            <?php }else{ ?>class="chevrond"<?php } ?> ><img style="width:20px;height:20px;" src="../images/next.png" alt=""></a>
        <?php }  ?>

        <?php if($page==0)  {  ?>
        <a class="chevrond" disabled><img src="../images/last.png" style="width:20px;height:20px;" alt=""></a> 
        <a <?php if($page<($nombrePages - 1)) { ?>class="chevron" href="index.php?page=<?php echo ($page+1); ?>" <?php }else{ ?>class="chevrond" <?php } ?>>
            <img style="width:20px;height:20px;" src="../images/next.png" alt=""></a>
        <?php }  ?>

        </ul>
</div>	 	
</div>