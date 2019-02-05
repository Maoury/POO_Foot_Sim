<?php
// On commence par ajouté les classes parentes
require 'Joueur.php';
require 'Equipe.php';
//Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';
$arsenul = new Equipe('Arsenul','',)
$henry = new Attaquant('Henry', 98, 89, 80, 70, 75);
echo "votre attaquant est". $henry->getNomJoueur() ;
setCompo($henry);
echo getCompo();
