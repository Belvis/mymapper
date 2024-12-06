<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Plan du site "; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<nav>
    <ul>
        <li><a href="index.php"><h3>Accueil</h3></a></li>
        <li>
            <a href="horaires.php"><h3>Horaires</h3></a>
            <ul>
                <li><a href="horaires.php#1"><h4>Horaires</h4></a></li>
                <li><a href="horaires.php#2"><h4>Dernières Gares Consultées</h4></a></li>
            </ul>
        </li>
        <li>
            <a href="infotrafic.php"><h3>Info Trafic</h3></a>
            <ul>
                <li><a href="infotrafic.php#3"><h4>RER Transilien</h4></a></li>
                <li><a href="infotrafic.php#4"><h4>Métro</h4></a></li>
                <li><a href="infotrafic.php#5"><h4>Tramway</h4></a></li>
            </ul>
        </li>
        <li><a href="carte.php"><h3>Carte du Réseau</h3></a></li>
        <li><a href="tarifs.php"><h3>Tarifs</h3></a></li>
        <li><a href="statistique.php"><h3>Statistiques</h3></a></li>
        <li><a href="tech.php"><h3>Tech (Image du jour de la NASA)</h3></a></li>
        <li>
            <a href="index.php#apropos"><h3>À Propos</h3></a>
            <ul>
                <li><a href="index.php#mission"><h4>Notre Mission</h4></a></li>
                <li><a href="index.php#contact"><h4>Nous Contacter</h4></a></li>
            </ul>
        </li>
    </ul>
</nav>

</main>
<?php include 'include/footer.inc.php'; ?>