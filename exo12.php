<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée <br>
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue <br>
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») <br>
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG <br>
</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

$prenomLangues = array("Zoe"=>"FRA", "Jose"=>"ESP", "Andrew"=>"ENG");


foreach ($prenomLangues as $prenom => $langue) {
  
    if ($langue == "FRA") {

        echo "Salut $prenom<br>";

    } elseif ($langue == "ESP") {

        echo "Hola $prenom<br>";

    }
    else echo "Hello $prenom<br><br>";

}

ksort($prenomLangues);

foreach ($prenomLangues as $prenom => $langue) {
  
    if ($langue == "FRA") {

        echo "Salut $prenom<br>";

    } elseif ($langue == "ESP") {

        echo "Hola $prenom<br>";

    }
    else echo "Hello $prenom<br>";

}

?>