<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Pertubation Metro"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<h1>Information sur le trafic du Métro</h1>
	<p>Bienvenue sur notre section dédiée au trafic sur les lignes de métro d'Île-de-France. Planifiez au
mieux votre déplacement en restant informé en temps réel des retards, des interruptions de
service et des travaux en cours.</p>
	<section class="container">  
		
		<img src="images/1.PNG" alt="M1"></a>
		<p><?php getTraficInfo("C01371");?></p>
		<?php sleep(1); ?>
		<img src="images/2.PNG" alt="M2">
		<p><?php getTraficInfo("C01372");?></p>
		<?php sleep(1); ?>
		<img src="images/3.PNG" alt="M3">
		<p><?php getTraficInfo("C01373");?></p>
		<?php sleep(1); ?>
		<img src="images/3bis.PNG" alt="M3BIS">
		<p><?php getTraficInfo("C01386");?></p>
		<?php sleep(1); ?>
		<img src="images/4.PNG" alt="M4">
		<p><?php getTraficInfo("C01374");?></p>
		<?php sleep(1); ?>
		<img src="images/5.PNG" alt="M5">
		<p><?php getTraficInfo("C01375");?></p>
		<?php sleep(1); ?>
		<img src="images/6.PNG" alt="M6">
		<p><?php getTraficInfo("C01376");?></p>
		<?php sleep(1); ?>
		<img src="images/7.PNG" alt="M7">
		<p><?php getTraficInfo("C01377");?></p>
		<?php sleep(1); ?>
		<img src="images/7bis.PNG" alt="M7BIS">
		<p><?php getTraficInfo("C01387");?></p>
		<?php sleep(1); ?>
		<img src="images/8.PNG" alt="M8">
		<p><?php getTraficInfo("C01378");?></p>
		<?php sleep(1); ?>
		<img src="images/9.PNG" alt="M9">
		<p><?php getTraficInfo("C01379");?></p>
		<?php sleep(1); ?>
		<img src="images/10.PNG" alt="M10">
		<p><?php getTraficInfo("C01380");?></p>
		<?php sleep(1); ?>
		<img src="images/11.PNG" alt="M11">
		<p><?php getTraficInfo("C01381");?></p>
		<?php sleep(1); ?>
		<img src="images/12.PNG" alt="M12">
		<p><?php getTraficInfo("C01382");?></p>
		<?php sleep(1); ?>
		<img src="images/13.PNG" alt="M13">
		<p><?php getTraficInfo("C01383");?></p>
		<?php sleep(1); ?>
		<img src="images/14.PNG" alt="M14">
		<p><?php getTraficInfo("C01384");?></p>
    </section>
</main>
<?php include 'include/footer.inc.php'; ?>