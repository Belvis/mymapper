<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Vos Horaires de Transport en Commun Simplifiés"; 
$description = "Trouvez facilement les horaires de train, tram et métro pour vos déplacements quotidiens avec My Mapper. "; 
include 'include/header.inc.php'; 
?>
<main>
	<section class="container">
	<h2>Statistique des gares consultées</h2>
	<p>Découvrez les gares les plus populaires parmi nos utilisateurs grâce à notre histogramme des statistiques des gares consultées. Cette visualisation dynamique vous permet de voir en un coup d'œil les destinations les plus fréquemment recherchées, offrant ainsi un aperçu précieux des tendances de déplacement dans votre région.</p>
	<p>
		Que vous soyez curieux de connaître les gares les plus fréquentées, que vous recherchiez des informations sur les itinéraires les plus courants ou que vous souhaitiez simplement explorer les destinations populaires, notre histogramme des statistiques des gares consultées est là pour vous aider.
	</p>
	<p>Consultez l'histogramme ci-dessous pour découvrir les gares qui attirent le plus l'attention de nos utilisateurs :</p>
	<section>
	<?php
	$resultat_histogramme = genererHistogrammeDepuisCSV('util/archive.csv');
	$labels = $resultat_histogramme['labels'];
	$data = $resultat_histogramme['data'];
	?>
	<canvas id="histogramme"></canvas>
	    <script>
	        var labels = <?php echo json_encode($labels); ?>;
	        var data = <?php echo json_encode($data); ?>;
	        var ctx = document.getElementById('histogramme').getContext('2d');
	        var myChart = new Chart(ctx, {
	            type: 'bar',
	            data: {
	                labels: labels,
	                datasets: [{
	                    label: 'Nombre de consultations par gare',
	                    data: data,
	                    backgroundColor: '#FFD4F3',
	                    borderColor: '#FFFFFF',
	                    borderWidth: 1
	                }]
	            },
	            options: {
	                scales: {
	                    yAxes: [{
	                        ticks: {
	                            beginAtZero: true
	                        }
	                    }]
	                }
	            }
	        });
	    </script>
	</section>
</section>
</main>
<?php include 'include/footer.inc.php'; ?>