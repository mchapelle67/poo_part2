<h1>POO Exercice 1 - Auteur</h1>

<?php 

class Auteur {
    private string $_prenom;
    private string $_nom;
    private array $_livres;


    public function __construct(string $nom, string $prenom){
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_livres = [];
    }


    public function getPrenom(): string {
        return $this->_prenom;
    }
    public function getNom(): string {
        return $this->_nom;
    }

    // public function getLivres(): Livre {
    //     return $this->_livres;
    // }


    public function setPrenom(string $prenom) {
        return $this->_prenom = $prenom;
    }
    public function setNom(string $nom) {
        return $this->_nom = $nom;
    }
    // public function setLivres(Livre $livres) {
    //     return $this->_livres = $livres;
    // }


    public function ajouterLivre(Livre $livre){
        $this->_livres[] = $livre;
        // tu vas array push l'objet livre que je t'ai donné en argument dans le tableau de livres de l'auteur
    }
    
    public function afficherBibliographie() {
        echo $this->_prenom . " " . $this->_nom . " : <br>";
        foreach ($this->_livres as $livre) {
            echo $livre->getOuvrage() . " (" . $livre->getAnneeDeParution() . ") : " . $livre->getNbPages() . " pages / " . $livre->getPrix() . " €<br>";
        }
}
}