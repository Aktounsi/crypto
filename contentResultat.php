<div id="ajouter" class="tab-pane active">
<div class="md-form mx-5 my-5">
    <h2>Résultat du dernier vote : </h2>
    <h2>Vinqueur : <?php echo select_vinqueur($bdd); ?></h2> <br> <br>
    <table class="table table-striped">
				<thead>
					<th>ID_vote#</th>
					<th>Choix </th>
                </thead>
            
<?php include('votesListe.php');  ?>

</div>
</div>