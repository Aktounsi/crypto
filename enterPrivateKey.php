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
                <h2>Veillez vérifiez votre boite mail et entrez votre clé privée !!</h2>
                <div id="ajouter" class="tab-pane active">
				<form id="form" method="POST" action="newPrivateKey.php">
				<div class="form-group">
					
					<div class="md-form mx-5 my-5">
                    <label  for="private_key">Entrez votre clé privée :</label>
                    <textarea id="private_key" name="private_key" class="form-control"> </textarea>
                    </div>
                    
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
<script src="envoyer.js"> </script>
</body>
</html>