<h1>POO Exercice 1 - Auteur</h1>

<?php 

class Auteur {
    private string $_prenom;
    private string $_nom;


    public function __construct(string $_nom, string $_prenom){
        $this->_prenom = $_prenom;
        $this->_nom = $_nom;
    }


    public function getPrenom(): string {
        return $this->_prenom;
    }
    public function getNom(): string {
        return $this->_nom;
    }


    public function setPrenom(string $_prenom) {
        $this->_prenom = $_prenom;
    }
    public function setNom(string $_nom) {
        $this->_nom = $_nom;
    }
    
    public function __toString(): string {
        return $this->_prenom . " " . $this->_nom;  
    }
    
}

