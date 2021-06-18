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
				<h2>Ajouter un Signataire</h2>
				<form id="form" method="POST" action="nv.php">
				<div class="form-group">
					
					<div class="md-form mx-5 my-5">
                    <label  for="id_card">Entrer un identifiant pour la carte :</label>
                    <input type="number" id="id_card" name="id_card" class="form-control"> 
                    </div>
                    <div class="md-form mx-5 my-5">
                    <label  for="mdp">Entrer le mot de passe :</label>
                    <input type="password" id="mdp" name="mdp" class="form-control"> 
                    </div>
                    <div class="md-form mx-5 my-5">
                    <label  for="email">Entrer l'adresse mail :</label>
                    <input type="email" id="email" name="email" class="form-control"> 
                    </div>

                    <br>

					
					<br>
					<br>		
					<button class="btn btn-success">Enregistrer</button>
				</div>
				</form>
				</div>
                
            </section>
        </div>		
    </div>
</div>
</div>
<script src="../envoyer.js"></script>
</body>
</html>