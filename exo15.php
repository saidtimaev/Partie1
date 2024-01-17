<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).<br>
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.<br>
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;<br>
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;<br>

</p> 

<h2>Résultat</h2>

<p>Affichage :
</p> 

<?php

class Personne {

    public $nom;
    public $prenom;
    public $dateNaissance;

    function __construct($nom, $prenom, $dateNaissance) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }
}

$personne1 = new Personne("DUPONT", "Michel", "1980-02-19");
$personne2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

$dateAuj = new DateTime();

$diff = $dateAuj->diff(); 

echo "$personne1->nom " . "$personne1->prenom a ";

echo "Age de la personne : $diff->y ans ";

?>