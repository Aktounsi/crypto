<?php defined('_DEFVAR') or exit('Restricted Access');   ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/crypto/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    <script type="text/javascript" src="file:///C:/wamp64/www/PFE/sidebar/sweetalert/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="file:///C:/wamp64/www/PFE/sidebar/sweetalert/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Vote électronique</title>
    </head>
    <body>
    <div id="c1" class="wrapper">      

	<nav id="sidebar" style="height:1200px;">
			<div class="sidebar-header">       <!-- sidebar header -->
				<h3>Vote électronique</h3>
			</div>
			<ul class="list-unstyled components">       <!-- sidebar list -->
                <li <?php if(    (isset($_SESSION['active']))  && ($_SESSION['active']=='0')  ) { ?> class="active" <?php } ?> ><a href="/crypto/admin/"  >Ajouter une session</a>
				</li>
				
                <li <?php if(    (isset($_SESSION['active']))  &&   ($_SESSION['active']=='1')) { ?> class="active" <?php } ?> ><a href="/crypto/admin/candidat/" >Ajouter un candidat</a>
				</li>
                <li <?php if(    (isset($_SESSION['active']))  && ($_SESSION['active']=='2')) { ?> class="active" <?php } ?> ><a href="/crypto/admin/signataire/">Ajouter un signataire</a>
				</li>
				<li <?php if(    (isset($_SESSION['active']))  && ($_SESSION['active']=='3')) { ?> class="active" <?php } ?> ><a href="/crypto/admin/decompteur/">Ajouter un décompteur</a>
				</li>
				<li <?php if(    (isset($_SESSION['active']))  && ($_SESSION['active']=='4')) { ?> class="active" <?php } ?> ><a href="/crypto/admin/votant/">Ajouter un votant</a>
				</li>
				
			</ul>
			
		</nav>

		<div class="content">
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
            
            
				
            
				