<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$dateCourante = new DateTime("2018-05-21");
$dateNaissance = new DateTime("1985-01-17");

// calcule la différence entre les deux dates
$diff = $dateCourante->diff($dateNaissance); 

// var_dump($diff);

echo "Age de la personne : $diff->y ans ";
echo "$diff->m mois ";
echo "$diff->d jours";

echo $diff->format("%Y ans %m mois %d jours");


?>