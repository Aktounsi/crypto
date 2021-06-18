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
				<h2>Ajouter un candidat</h2>
				<form id="form" method="POST" action="nv.php"  enctype="multipart/form-data">
				<div class="form-group">
					
					<div class="md-form mx-5 my-5">
                    <label  for="nom">Entrer le nom du candidat :</label>
                    <input type="text" id="nom" name="nom" class="form-control"> 
                    </div>
                    <div class="md-form mx-5 my-5">
                    <label  for="prenom">Entrer le prénom :</label>
                    <input type="text" id="prenom" name="prenom" class="form-control"> 
                    </div>
                    <div class="custom-file">
                    <input class="custom-file-input" type="file" name="pic" id="pic" />
                    <label class="custom-file-label" for="pic">Choose file...</label>
                    <div class="invalid-feedback" >Example invalid custom file feedback</div> <br>
                    
                    <div id="uploadStatus"></div>
                    
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