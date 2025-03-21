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