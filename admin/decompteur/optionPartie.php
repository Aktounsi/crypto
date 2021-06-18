<?php 
 //require('../../connexionbdd.php'); 
 ?>


<?php 

  $req = $bdd->query('SELECT * from condidat ');

            while ($donnees = $req->fetch())
            { 
            ?>
            <optgroup label="<?php echo 'candidat :'; ?>" >
            <option value="<?php echo $donnees['ID_condidat']; ?>" > 
                <?php echo $donnees['ID_condidat'] .'#'. '&nbsp;&nbsp;'; ?> 
                    <?php $ch = '\''. $donnees['ID_condidat'].'\'' ; $i = 0; while($i < (15 - strlen($ch))){ ?> 
                    <span style='color:white;margin-right:1.25em; display:inline-block;'>&nbsp;</span>  
                    <?php $i++; } ?> <span> Nom : </span>
            
                <?php echo $donnees['nom'] ;  ?> 
                    <?php $ch = '\''. $donnees['nom'] .'\'' ; $i = 0; while($i < (12 - strlen($ch))){ ?> 
                    <span style='color:white;margin-right:1.25em; display:inline-block;'>&nbsp;</span>  
                    <?php $i++; } ?> <span> Prénom : </span>
                <?php echo $donnees['prenom'] ;  ?> 
                    
                </option>
                </optgroup>    
            <?php } $req->closeCursor();     ?>  