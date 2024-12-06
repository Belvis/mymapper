<?php 
require_once('include/function.inc.php');
$title = "My Mapper - Tarif"; 
$description = "Bienvenue sur MY MAPPER. Découvrez ce que nous proposons et trouvez ce que vous cherchez."; 
include 'include/header.inc.php'; 
?>
     <style>
    /* Style pour masquer la case à cocher par défaut */
    #reductionOptions {
        display: none;
    }

    /* Style pour afficher la case à cocher lorsque "Bénéficiaires d'aides sociales" est sélectionné */
    #type_ligne option[value="benevoles"]:checked ~ #reductionOptions {
        display: block;
    }
</style>
<main>
		

<h1>Tarif sur le réseau</h1>
<p>Explorez les différentes options tarifaires pour les moyens de transport disponibles dans votre
région. Cette section vous fournit des informations détaillées sur les abonnements, les tarifs
spéciaux et les réductions disponibles. Découvrez les détails sur les passes mensuels,
hebdomadaires et annuels, ainsi que sur les tarifs réduits pour les étudiants, les seniors et les
personnes à mobilité réduite. Trouvez l'option la plus avantageuse pour vos déplacements
quotidiens ou occasionnels grâce à notre formulaire de recherche .</p>
<form method="POST">
    <input list="suggestions"id="type_profil" name="type_profil" placeholder="Selectionnez un profil " autocomplete="off" required>
    <datalist id="suggestions">
        <option value="Bénéficiaires d'aides sociales">Bénéficiaires d'aides sociales</option>
        <option value="Jeune (moins de 26 ans)">Jeune (moins de 26 ans)</option>
        <option value="Personnes en situation handicap ou accompagnateur">Personnes en situation handicap ou accompagnateur</option>
        <option value="Actif">Actif</option>
        <option value="Senior (plus de 62 ans)">Senior (plus de 62 ans)</option>
        <option value="Visiteur, touriste">Visiteur, touriste</option>
        </datalist>
        <input list="suggestion"id="type_duree" name="type_duree" placeholder="Selectionnez une durée " autocomplete="off" required>
        <datalist id="suggestion">
        <option value="Souvent">Souvent</option>
        <option value="Occassionnellement">Occassionnellement</option>
        </datalist>
    <br>
  <button type="submit">Rechercher</button>  
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $profile = $_POST['type_profil'];
    $duration = $_POST['type_duree'];
    
    // Appel de la fonction getTarif avec les données du formulaire
    $resultat = getTarif($profile, $duration);
    echo $resultat;
}


?>
</main>
<?php include 'include/footer.inc.php'; ?>