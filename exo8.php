<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme : <br>
Affichage (pour la table de 8) :<br>
Table de 8 :<br>
1 x 8 = 8<br>
2 x 8 = 16<br>
3 x 8 = 24 …<br>
Remarque : proposer 2 solutions avec 2 types de boucles.<br>
<h2>Résultat</h2>

<p>Affichage 1ère version :<br><br>
</p> 

<?php

$nombre = 3;

echo "Table de $nombre :<br><br>";


for($i = 1; $i <= 10; $i++) {

    $resultat = $i*$nombre;

    echo "$i x $nombre = $resultat<br>"; 
}
?>

<p>Affichage 2ème version :<br><br>
</p> 

<?php

$nombre = 9;

echo "Table de $nombre :<br><br>";


$j = 1;
while($j <= 10) {
    $resultat = $j*$nombre;
    echo "$j x $nombre = $resultat<br>"; 
    $j++;
}
?>