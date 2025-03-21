<h1>Exercice 1</h1>

<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$stephenKing = new Auteur("King", "Stephen");

  
$livre1 = new Livre("CA", "1986", "1138", 20, $stephenKing);
$livre2 = new Livre("Simetierre", "1983", "374", 15, $stephenKing);
$livre3 = new Livre("Le Fleau", "1978", "823", 14, $stephenKing);
$livre4 = new Livre("Shinning", "1977", "447", 16, $stephenKing);

echo $stephenKing->afficherBibliographie();





// echo $livre1->afficherBibliographie();
// echo $livre2->afficherBibliographie();
// echo $livre3->afficherBibliographie();
// echo $livre4->afficherBibliographie();



// classe : moule pour creer un objet 

// objet : c'est une instance d'une classe
// encapsulation : restreint l'accès au objet privé ou protegé de la classe et pes protège d'un accès externe 

// methode magique : ce sont des fonctions spécifique à la poo

// $this : c'est la valeur de l'objet appelant 