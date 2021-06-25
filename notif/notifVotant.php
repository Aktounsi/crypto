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
            <?php    echo "Vote Signé"; ?> 
        </h3>
        <p> 

        <?php echo '<strong style="color:black;font-weight:bold;">#ID_signataire : ' . $donnees['emetteur'] . '</strong>'; ?> <br>    
        <?php echo '<strong style="color:black;font-weight:bold;">vote signé : ' . $donnees['contenu'] . '</strong>'; ?>   <br>
        </p>
        <div id="ajouter" class="tab-pane active">
				<form id="form" method="POST" action="verifySignature.php?id_signataire=<?php echo $donnees['emetteur']; ?>">
				<div class="form-group">
					
					<div class="md-form mx-5 my-5">
                    <label  for="voteEnClair">Entrez le vote que vous avez choisi afin de vérifier la signature :</label>
                    <input type="text" id="voteEnClair" name="voteEnClair" class="form-control" > <br> <br>
                    <label  for="voteEnClair">La signature que vous avez reçu :</label>
                    <textarea id="signature" name="signature" class="form-control"><?php echo $donnees['contenu']; ?></textarea>
                    </div>
                    
					<br>
					<br>		
					<button class="btn btn-success">Vérifier</button>
				</div>
				</form>
				</div>
       <br>
        <p style="margin-left:25%;"> 
            
            <a href="valider_vote.php?code_user=<?php echo $donnees['emetteur']; ?>" class="link"> <button class="btn btn-success"> Valider</button></a> 
        
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