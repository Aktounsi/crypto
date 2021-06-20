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
                <h2>Il n'y a pas de session en cours !!</h2>
                <h2><?php date_default_timezone_set("Africa/Algiers"); echo date("Y-m-d H:i:s"); ?></h2>
                <?php //afficher le résultat du dernier vote si date_delib < current_time and dernier vote exists 
                      include ('contentResultat.php');
                ?>
            </section>
        </div>		
    </div>
</div>
</div>
</body>
</html>