<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui <br>
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$montantDu = 152;
$montantVerse = 199;
$reste = $montantVerse - $montantDu;

echo "Montant à payer : $montantDu €<br>";
echo "Montant versé : $montantVerse €<br>";
echo "Reste à payer : $reste €<br>";
echo "*********************<br>";
echo "Rendu de monnaie :<br>";

$billetsDix = floor($reste / 10);
$billetsCinq = floor(($reste % 10) / 5);
$pieceDeux =  floor(($reste % 10 % 5) / 2);
$pieceUn = floor(($reste % 10 % 5 % 2) / 1);

echo "$billetsDix billets de 10 € - $billetsCinq billets de 5 € - $pieceDeux pièce de 2 € - $pieceUn pièce de 1 €"
?>