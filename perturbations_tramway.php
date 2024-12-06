<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Pertubation Tramway"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<h1>Information sur le trafic du Tramway</h1>
	<p>Explorez cette section pour obtenir les dernières informations sur le trafic des lignes de tramway
en Île-de-France. Planifiez votre trajet de manière efficace en restant au courant des retards, des
interruptions de service et des travaux en cours.</p>
	<section class="container">  
		
		<img src="images/T1.PNG" alt="T1"></a>
		<p><?php getTraficInfo("C01389");?></p>
		<?php sleep(1); ?>
		<img src="images/T2.PNG" alt="T2">
		<p><?php getTraficInfo("C01390");?></p>
		<?php sleep(1); ?>
		<img src="images/T3a.PNG" alt="T3">
		<p><?php getTraficInfo("C01391");?></p>
		<?php sleep(1); ?>
		<img src="images/T3b.PNG" alt="T3BIS">
		<p><?php getTraficInfo("C01679");?></p>
		<?php sleep(1); ?>
		<img src="images/T4.PNG" alt="T4">
		<p><?php getTraficInfo("C01843");?></p>
		<?php sleep(1); ?>
		<img src="images/T5.PNG" alt="T5">
		<p><?php getTraficInfo("C01684");?></p>
		<?php sleep(1); ?>
		<img src="images/T6.PNG" alt="T6">
		<p><?php getTraficInfo("C01794");?></p>
		<?php sleep(1); ?>
		<img src="images/T7.PNG" alt="T7">
		<p><?php getTraficInfo("C01774");?></p>
		<?php sleep(1); ?>
		<img src="images/T8.PNG" alt="T8">
		<p><?php getTraficInfo("C01795");?></p>
		<?php sleep(1); ?>
		<img src="images/T9.PNG" alt="T9">
		<p><?php getTraficInfo("C02317");?></p>
		<?php sleep(1); ?>
		<img src="images/T1O.PNG" alt="T10">
		<p><?php getTraficInfo("C02528");?></p>
		<?php sleep(1); ?>
		<img src="images/T11.PNG" alt="T11">
		<p><?php getTraficInfo("C01999");?></p>
		<?php sleep(1); ?>
		<img src="images/T12.PNG" alt="T12">
		<p><?php getTraficInfo("C02529");?></p>
		<?php sleep(1); ?>
		<img src="images/T13.PNG" alt="T13">
		<p><?php getTraficInfo("C02344");?></p>
		<?php sleep(1); ?>
    </section>
</main>
<?php include 'include/footer.inc.php'; ?>