<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Carte du Reseau"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
		<iframe src="https://data.iledefrance-mobilites.fr/explore/embed/dataset/emplacement-des-gares-idf-data-generalisee/map/?location=12,48.90829,2.39416&basemap=jawg.streets&static=false&datasetcard=false&scrollWheelZoom=true" width="1100" height="1000" frameborder="0"></iframe>
</main>
<?php include 'include/footer.inc.php'; ?>