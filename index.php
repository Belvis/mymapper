<?php 
require_once('include/function.inc.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ville_gare = $_POST["ville_gare"];
    $type_ligne = $_POST["type_ligne"];
    $nom_ligne = $_POST["nom_ligne"];
    setLastConsultedCookie($ville_gare, $type_ligne, $nom_ligne);
}
$title = "Horaire trains et Info gare-Projet AGBOTON MABIALA"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
<main>
	<section>
	<h1>Bienvenu(e) a vous sur My Mapper</h1>
	<aside class="aside-container">
        <?php
        $dossier_photos = 'photo/';
        $legendes_photos = array(
            '1.jpg' => 'Hall de gare.',
            '2.jpg' => 'Quai de gare.',
            '3.jpg' => 'Sortie de Métro.',
            '4.jpg' => 'Train en gare.',
            '5.jpg' => 'Vu de haut de gare .',
            '6.jpg' => 'Hall de gare.',
            '7.jpg' => 'Train en voyage.',
            '8.jpg' => 'TGV.',
            '9.jpg' => 'Metro et Passager.',
            '10.jpg' => 'Arret de bus.'
        );
        $photos = scandir($dossier_photos);
        $photos = array_diff($photos, array('.', '..'));
        $photo_aleatoire = $photos[array_rand($photos)];
        $legende_photo = isset($legendes_photos[$photo_aleatoire]) ? $legendes_photos[$photo_aleatoire] : 'Pas de légende disponible.';
        echo '<figure class="photo-container">';
        echo '<img src="' . $dossier_photos . $photo_aleatoire . '" alt="' . $photo_aleatoire . '">';
        echo '<figcaption class="photo-caption">' . $legende_photo . '</figcaption>';
        echo '</figure>';
        ?>
    </aside>
	
</section>
<p>Bienvenue sur My Mapper, votre guide ultime pour les horaires de départ dans les gares. Notre
plateforme intuitive vous permet de trouver rapidement les prochains départs et de consulter
facilement les dernières gares visitées. Que vous soyez un voyageur régulier ou occasionnel, My
Mapper vous offre une expérience de recherche efficace et conviviale pour planifier vos
déplacements en toute tranquillité.</p>
<p>Explorez nos autres sections pour obtenir des informations sur les perturbations de trafic, les
tarifs, la carte du réseau et bien plus encore. Naviguez à travers les différentes options du menu
pour découvrir tout ce que My Mapper peut vous offrir pour simplifier vos déplacements.</p>
<p>Grâce à notre interface conviviale et à nos données constamment mises à jour, vous ne
manquerez jamais votre train.
Appuyez sur le bouton “Découvrir” ci-dessous pour commencer à explorer.</p>
<a href="horaires.php"><button>Découvrir</button></a>
</main>
<?php include 'include/footer.inc.php'; ?>