<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.<br><br>
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de<br> 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 


<?php

$sexe = "H";
$age = 21;

echo "Age : $age<br>";
echo "Sexe : $sexe<br>";


if ($sexe == "F") {

    if ($age >= 18 & $age <= 35) {
        echo "La personne est imposable.";
    }  
    else {
        echo "La personne n'est pas imposable.";
    }

} elseif ($sexe == "H") {

    if ($age > 20) {

        echo "La personne est imposable.";

    }

    else  {

        echo "La personne n'est pas imposable.";

    }

}
else {

    echo "Choisissez un genre";

}



?>