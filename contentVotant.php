<?php defined('_DEFVAR') or exit('Restricted Access');  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style_votant.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Vote électronique</title>
    
  </head>
  <body >
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button type="button" id="sidebarCollapse" class="btn btn-info" style="margin-left:5px;">
					<i class="fa fa-align-justify"></i> <span></span>
				</button>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="">Notification
							<span id="spanNotif" 
								style="	background: rgba(255, 255, 255, 0.007); padding:3px;padding-right:5px;padding-left:5px; border-radius: 4px; color:white; font-size: 9px;">
							</span>
						</a>
					</li>
                        <li><a class="nav-link" href="/crypto/deconnexion.php">Déconnexion</a>
						</li>
					</ul>
				</div>
            </nav>
    <div class="grid-container" >
    <?php include('candidats/candidatsListe.php');  ?>
    </div>  
<script src="candidats/progress.js"></script>
  </body>
</html>
