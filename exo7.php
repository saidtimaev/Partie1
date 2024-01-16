<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge : <br><br>
Poussin : entre 6 et 7 ans <br>
Pupille : entre 8 et 9 ans <br>
Minime : entre 10 et 11 ans <br>
Cadet : à partir de 12 ans <br>
Si la catégorie n’est pas gérée, merci de le préciser. 
<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$age = 5;

if ($age >= 12) {
    $resultat = "Cadet";
} elseif ($age >= 10) {
    $resultat = "Minime";
} elseif ($age >= 8) {
    $resultat = "Pupille";
} elseif ($age >= 6) {
    $resultat = "Poussin";
}
else {
    $resultat = "La catégorie n'est pas gérée";
    echo $resultat;
    die;
}

echo "L'enfant qui a $age ans appartient à la catégorie $resultat";

?>