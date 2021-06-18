<?php 
 //require('../../connexionbdd.php'); 
 ?>

<?php 


  $reqOpt = $bdd->prepare('SELECT * FROM condidat');
  $reqOpt->execute();
    
                    
               $i=0;
            while ($donneesOpt = $reqOpt->fetch())
            { $i++;
            ?> <input type="checkbox" name="candidats[]" value="<?php echo $donneesOpt['ID_condidat'];  ?>"  >   
            <?php  echo "#code_candidat = ".$donneesOpt['ID_condidat']." nom = ".$donneesOpt['nom']. " ".$donneesOpt['prenom'] ;  ?> 
                 
                <br> 
            <?php } $reqOpt->closeCursor(); 