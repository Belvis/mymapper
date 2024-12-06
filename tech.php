<?php 
$title = "Page tech-Projet AGBOTON MABIALA"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
<h1> Prise en main des formats d’échanges JSON et XML des API Web</h1>
		<h2>1)Image du jour de la NASA</h2>
<section class="container">
    <?php
    $apodData = file_get_contents('https://api.nasa.gov/planetary/apod?api_key=YWHFGSPSfr0TNryON9X3T8hNnW53srPcVxhZe9iY');

    if ($apodData === false) {
        echo "Failed to fetch APOD data.";
    } else {
        $apodData = json_decode($apodData);

        if ($apodData === null) {
            echo "Failed to decode APOD data.";
        } else {
            ?>
            <img src="<?php echo $apodData->url; ?>" alt="APOD Image">
            <h3><?php echo $apodData->title; ?></h3>
            <p><?php echo $apodData->explanation; ?></p>
            <?php
        }
    }
    ?>
</section>

</section>
		<h2>2)Localisation avec Geoplugin</h2>
<section class="container">
	<?php
	require_once('include/function.inc.php');
	$visitor_ip = $_SERVER['REMOTE_ADDR'];
	$geo_data = getGeoData($visitor_ip);
	$location_info = extractLocationInfo($geo_data);
	echo "<p>Votre emplacement approximatif est : $location_info</p>";
	?>
</section>
		<h2>3)Extraction d’informations depuis un flux JSON ou XML</h2>
<section class="container">
		<h3>Adresse IP avec ipinfo (flux JSON) :</h3>
		<?php
	    require_once('include/function.inc.php');
	    echo getGeoInfo();
	    echo"<h3>Votre adresse IP avec whatismyip (Flux XML)</h3>";
	    echo afficher_informations_ip();
		?>
</section>
</main>
<?php include 'include/footer.inc.php'; ?>