<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Info Trafic"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<h1>Information sur le trafic en temps réel</h1>
	<p>Restez informé des conditions de circulation sur l'ensemble des réseaux de transports en
commun. Notre équipe surveille de près les mises à jour sur les retards, les interruptions de
service, les travaux en cours et les incidents afin de vous fournir les informations nécessaires
pour un voyage en toute tranquillité.</p>
<p>Pour obtenir des informations spécifiques sur le trafic du RER ,du métro, ou du tramway, veuillez
choisir ci-dessous.</p>
	<section class="container">

     <h2 id="#3">RER et Transilien</h2>
<a href="perturbations_rer_transilien.php"><figure><img src="images/Train-transilien.png" alt="Train"><figcaption>Cliquez ici pour voir les pertubations sur le RER et le réseau Transilien </figcaption></figure></a>
<h2 id="#4">Métro</h2>
<a href="perturbations_metro.php"><figure><img src="images/metrologo.png" alt="Train"><figcaption>Cliquez ici pour voir les pertubations sur le Métro </figcaption></figure></a>
<h2 id="#5">Tramway</h2>
<a href="perturbations_tramway.php"><figure><img src="images/tram.png" alt="Train"><figcaption>Cliquez ici pour voir les pertubations sur le réseau des Tramway </figcaption></figure></a>   
    </section>
</main>
<?php include 'include/footer.inc.php'; ?>