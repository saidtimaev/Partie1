<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$phraseOri = "Engage le jeu que je le gagne";

// on enlève les espaces de la phrase et on met toutes les lettres en minuscule
$phrase1 = str_replace(" ","",strtolower($phraseOri));

// on inverse la phrase avec la fonction strrev();
$phrase2 = strrev($phrase1);

// Si les deux phrases sont égales alors la phrase est palindrome
if ($phrase1 == $phrase2) {

    echo "La phrase \"$phraseOri\" est palindrome ";

}
else {

    echo "La phrase \"$phraseOri\" n'est pas palindrome ";

}

?>
