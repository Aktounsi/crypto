<?php defined('_DEFVAR') or exit('Restricted Access');  ?>

<div class='ripple-background centered'>
                <div class='circle xxlarge shade1 '></div>
                <div class='circle xlarge shade2 '></div>
                <div class='circle large shade3 '></div>
                <div class='circle mediun shade4 '></div>
                <div class='circle small shade5 '></div>
            </div>

<div id="contenu" >
        <div id="bgdiv" >
            <section id="sectionIndex" >
                <h2>Vote électronique</h2>
                <h2>Espace Admin</h2>

                <div id="ajouter" class="tab-pane active">
				<h2>Ajouter une session</h2> <?php if(session_en_cours($bdd)){ echo 'Vous ne pouvez pas créer une nouvelle session car il y en a une en cours !!'; }else{ ?>
				<form id="form" method="POST" action="session/nv.php">
				<div class="form-group">
					
					<div class="md-form mx-5 my-5">
                    <label  for="date_debut">Entrer la date et l'heure du début de session :</label>
                    <input type="date" id="date_debut" name="date_debut" class="form-control"> <br>
                    <input type="time" step="1" id="heure_debut" name="heure_debut" class="form-control">
                    </div>
                    <div class="md-form mx-5 my-5">
                    <label  for="date_fin">Entrer la date et l'heure de la fin de la session :</label>
                    <input type="date" id="date_fin" name="date_fin" class="form-control"> <br>
                    <input type="time" step="1" id="heure_fin" name="heure_fin" class="form-control">
                    </div>
                    <div class="md-form mx-5 my-5">
                    <label  for="date_delib">Entrer la date et l'heure de la délibération :</label>
                    <input type="date" id="date_delib" name="date_delib" class="form-control"> <br>
                    <input type="time" step="1" id="heure_delib" name="heure_delib" class="form-control">
                    </div>

                    <label for="sec">Sélectionner les candidats :</label> <br>
                    <?php include('optionCandidats.php');  ?>
                    <br>

					
					<br>
					<br>		
					<button class="btn btn-success">Enregistrer</button>
				</div>
				</form> <?php } ?>
				</div>
                
            </section>
        </div>		
    </div>
</div>
</div>
<script src="envoyer.js"></script>
</body>

</html>