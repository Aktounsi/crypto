<?php defined('_DEFVAR') or exit('Restricted Access'); include ('included.php');  ?>

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
                <?php if( vote_fini($bdd)  &&  !clef_deja_partage($bdd,$_SESSION['id'])  &&  !secret_construit($bdd) ) { include ('contentPartagerClef.php');  }
                      elseif( vote_fini($bdd) && clef_deja_partage($bdd,$_SESSION['id']) &&  !secret_construit($bdd) ){ include ('contentAttentePatage.php');  }
                      elseif( vote_fini($bdd) &&  date_delib_arrive($bdd)  &&  clef_deja_partage($bdd,$_SESSION['id']) &&   secret_construit($bdd) ){ include ('contentResultat.php');  }  ?>
                
            </section>
        </div>		
    </div>
</div>
</div>
<script src="nbNotif.js"></script>
<script src="envoyer.js"></script>
<script src="progressbar.js"></script>


</body>
</html>