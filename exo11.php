<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce <br>
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé <br>
d’afficher le nombre de marques de voitures présentes dans le tableau.<br>
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$marqueVoiture = ["Peugeot", "BMW", "Renault", "Mercedes", "Toyota"];

$nombreMarques = count($marqueVoiture);

echo "Il y a $nombreMarques marques de voitures dans le tableau : <br><br>";

echo "<ul>";
foreach ($marqueVoiture as $marque) {
  echo "<li>$marque</li>";
}
echo "</ul>";

?>