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
    
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    
    function __construct(string $nom, string $prenom, string $dateNaissance) {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        // On définit que l'attribut dateNaissance est une date pour lequel on pourra utiliser comme paramètre une chaîne de caractères
        $this->_dateNaissance = new DateTime($dateNaissance); 
    }
    
    
    

// On crée la méthode donnerAge qui nous permettra de calculer et d'afficher l'âge de la personne
    public function donnerAge() {

        // On crée une variable $dateCourante qui nous permettra de connaitre la date d'aujourdhui à laquelle on va soustraire la date de naissance de la variable $dateNaissance
        // de l'objet auquel on fait appel ex : $personne1
        $dateCourante = new DateTime();

        // On definit l'attribut age de l'objet pour lequel on appelle la méthode 
        // On appelle la méthode diff() sur l'objet $dateCourante avec comme paramètre l'attribut _dateNaissance de l'objet sur lequel on appelle la méthode
        $age = $dateCourante->diff($this->_dateNaissance); 

        // On retourne la valeur de la variable age de l'objet sur lequel on a appelé la methode avec comme format l'année
        return $age->y." ans<br>";
       

    }

    // On utilise la méthode magique __toString() qui va nous simplifier l'affichage des informations demandées
    public function __toString() {

        return $this->_prenom." ".$this->_nom." a ".$this->donnerAge();

    }

    /**
     * Get the value of _nom
     */ 
    public function get_nom() : string
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     *
     * @return  self
     */ 
    public function set_nom(string $_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */ 
    public function get_prenom() : string
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     *
     * @return  self
     */ 
    public function set_prenom(string $_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    /**
     * Get the value of _dateNaissance
     */ 
    public function get_dateNaissance(): DateTime
    {
        return $this->_dateNaissance;
    }

    /**
     * Set the value of _dateNaissance
     *
     * @return  self
     */ 
    public function set_dateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

}

// On crée 2 objets 
$personne1 = new Personne("DUPONT", "Michel", "1980-02-19");
$personne2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
$personne2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

// On affiche les informations des 2 objets 
echo $personne1;
echo $personne2;

$personne2->set_nom($personne1->get_nom());
echo $personne2;

?>