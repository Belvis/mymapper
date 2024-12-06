<?php 
require_once('include/function.inc.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ville_gare = $_POST["ville_gare"];
    $type_ligne = $_POST["type_ligne"];
    $nom_ligne = $_POST["nom_ligne"];
    setLastConsultedCookie($ville_gare, $type_ligne, $nom_ligne);
}
$title = "My Mapper - Vos Horaires de Transport en Commun Simplifiés"; 
$description = "Trouvez facilement les horaires de train, tram et métro pour vos déplacements quotidiens avec My Mapper. "; 
include 'include/header.inc.php'; 
?>
<main>
<section class="container">
		<h2 id="#1">Horaires de Train, Tram et Métro</h2>
	<form method="POST">
        <label for="ville_gare">Arrêt recherchés :</label>
        <input list="suggestions"id="ville_gare" name="ville_gare" placeholder="Entrez le nom d'une gare ou d'un arrêt" autocomplete="off" required>
        <datalist id="suggestions">
        <?php 
         $zdcNames = getZdcNames();
        foreach ($zdcNames as $name) {
            echo "<option value=\"$name\">";
        }
        ?>
        </datalist>
        <br>
        <label for="type_ligne">Type de ligne :</label>
        <select id="type_ligne" name="type_ligne" required>
            <option value="metro">Métro</option>
            <option value="rail">RER et Transilien</option>
            <option value="tram">Tramway</option>
        </select>
        <br>
        <label for="nom_ligne">Lignes de transport :</label>
        <input list="suggest" id="nom_ligne" name="nom_ligne" placeholder="Entrez le nom de la ligne " autocomplete="off"  required>
        <datalist id="suggest">
        <?php 
         $zdcNames = getlineNames();
        foreach ($zdcNames as $name) {
            echo "<option value=\"$name\">";
        }
        ?>
        </datalist>
        <br>
        <button type="submit">Rechercher</button>
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	    $ville_gare = $_POST["ville_gare"];
	    $type_ligne = $_POST["type_ligne"];
	    $nom_ligne = $_POST["nom_ligne"];
	    $id_zone_arret = getIdZoneArret($ville_gare);
	    if (!empty($id_zone_arret)) {
	        $id_ligne = getIdLigne($type_ligne, $nom_ligne);
	            $prochainsDeparts = getProchainsDeparts($id_zone_arret, $id_ligne);
	            if (isset($prochainsDeparts['error'])) {
	                echo "Erreur : " . $prochainsDeparts['error'];
	            } else {
	                echo "<h2>Prochains départs</h2>";
	                echo "<table>";
			    echo "<tr><th>Destination</th><th>Heure de départ prévue</th><th>Statut</th></tr>";
			    foreach ($prochainsDeparts as $departure) {
			        echo "<tr>";
			        echo "<td>" . $departure['destination'] . "</td>";
			        echo "<td>" . date('H:i', strtotime($departure['expected_arrival'])) . "</td>";
			        echo "<td>" . $departure['status'] . "</td>";
			        echo "</tr>";
			    }
	    			echo "</table>";
	        } 
	    } else {
	        echo "<p>Impossible de trouver l'identifiant de la ville ou de l'arrêt.</p>";
	    		}
	    	}
	?>
	</section>
    <section>
    <?php
    $message_confirmation = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ville_gare"]) && isset($_POST["type_ligne"]) && isset($_POST["nom_ligne"])) {
        $ville_gare_consultee = $_POST["ville_gare"];
        $type_ligne = $_POST["type_ligne"];
        $nom_ligne = $_POST["nom_ligne"];
        enregistrer_gare_consultee($ville_gare_consultee, $type_ligne, $nom_ligne);
    }
    ?>
    <?php if (!empty($message_confirmation)) : ?>
    <p><?php echo $message_confirmation; ?></p>
    <?php endif; ?> 
    </section>
	<section class="container">
		<h2 id="#2">Dernière gare consultée :</h2>
        <p>Retrouvez rapidement les informations sur la dernière gare que vous avez consultée.</p>
		<?php $lastConsultedDetails = getLastConsultedDetails();?>
		<?php if ($lastConsultedDetails) : ?>
    <div>
        <p>Nom de la gare : <?php echo $lastConsultedDetails['ville_gare']; ?></p>
        <p>Type de ligne : <?php echo $lastConsultedDetails['type_ligne']; ?></p>
        <p>Ligne : <?php echo $lastConsultedDetails['nom_ligne']; ?></p>
        <p>Date de consultation : <?php echo $lastConsultedDetails['date_consultation']; ?></p>
    </div>
<?php endif; ?>
	</section>
	</main>
<?php include 'include/footer.inc.php'; ?>