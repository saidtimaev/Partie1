<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de <br>
coefficient). Elle devra être affichée avec 2 décimales.<br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];
$nbNotes = count($notes);
$sommeNotes = array_sum($notes);
$moyenne = round($sommeNotes / $nbNotes, 2);


echo "Les notes obtenues par l’élève sont : ";

echo implode(" ", $notes);

// foreach ($notes as $note) {

//     echo "$note ";

// }

echo "<br>Sa moyenne générale est donc de : $moyenne";

?>