<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Pertubation RER et Transilien"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<h1>Information sur le trafic du RER et transilien</h1>
	<p>Découvrez ici les informations sur le trafic du réseau RER en Île-de-France. Optimisez votre
itinéraire en restant informé en temps réel des retards, des interruptions de service et des
travaux en cours.</p>
	<section class="container">  
		
		<img src="images/A.PNG" alt="RER A"></a>
		<p><?php getTraficInfo("C01742");?></p>
		<?php sleep(1); ?>
		<img src="images/B.PNG" alt="RER B">
		<p><?php getTraficInfo("C01743");?></p>
		<?php sleep(1); ?>
		<img src="images/C.PNG" alt="RER C">
		<p><?php getTraficInfo("C01727");?></p>
		<?php sleep(1); ?>
		<img src="images/D.PNG" alt="RER D">
		<p><?php getTraficInfo("C01728");?></p>
		<?php sleep(1); ?>
		<img src="images/E.PNG" alt="RER E">
		<p><?php getTraficInfo("C01729");?></p>
		<?php sleep(1); ?>
		<img src="images/L.PNG" alt="L">
		<p><?php getTraficInfo("C01740");?></p>
		<?php sleep(1); ?>
		<img src="images/J.PNG" alt="J">
		<p><?php getTraficInfo("C01739");?></p>
		<?php sleep(1); ?>
		<img src="images/K.PNG" alt="K">
		<p><?php getTraficInfo("C01738");?></p>
		<?php sleep(1); ?>
		<img src="images/N.PNG" alt="N">
		<p><?php getTraficInfo("C01736");?></p>
		<?php sleep(1); ?>
		<img src="images/H.PNG" alt="H">
		<p><?php getTraficInfo("C01737");?></p>
		<?php sleep(1); ?>
		<img src="images/P.PNG" alt="P">
		<p><?php getTraficInfo("C01730");?></p>
		<?php sleep(1); ?>
		<img src="images/R.PNG" alt="R">
		<p><?php getTraficInfo("C01731");?></p>
		<?php sleep(1); ?>
		<img src="images/U.PNG" alt="U">
		<p><?php getTraficInfo("C01741");?></p>
    </section>
</main>
<?php include 'include/footer.inc.php'; ?>