<h1>POO Exercice 1 - Livre</h1>

<?php

class Livre {

// ATTRIBUTS
    private string $_ouvrage;
    private int $_anneeDeParution;
    private int $_nbPages;
    private float $_prix;
    private Auteur $_auteur;

    public function __construct(string $ouvrage, int $anneeDeParution, int $nbPages, float $prix, Auteur $auteur) {
        $this->_ouvrage = $ouvrage;
        $this->_anneeDeParution = $anneeDeParution;
        $this->_nbPages = $nbPages;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $auteur->ajouterLivre($this);
    }

    public function getOuvrage(): string {
        return $this->_ouvrage;
    }
    public function getAnneeDeParution(): int {
        return $this->_anneeDeParution;
    }
    public function getNbPages(): int {
        return $this->_nbPages;
    }
    public function getPrix(): float {
        return $this->_prix;
    }
    public function getAuteur(): Auteur {
        return $this->_auteur;
    }


    public function setOuvrage(string $ouvrage) {
        return $this->_ouvrage = $ouvrage;
    }
    public function setAnneeDeParution(int $anneeDeParution) {
        return $this->_anneeDeParution = $anneeDeParution;
    }
    public function setNbPages(int $nbPages) {
        return $this->_nbPages= $nbPages;
    }
    public function setPrix(float $prix) {
        return $this->_prix= $prix;  
    }
    public function setAuteur(Auteur $livre) {
        return $this->_auteur= $auteur;  
    }

}

