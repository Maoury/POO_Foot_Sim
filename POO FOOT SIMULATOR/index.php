<?php
// On commence par ajouté les classes parentes
require 'Joueur.php';
require 'Equipe.php';
//Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';

$arsenul = new Equipe('Arsenul');
$arsenul->setCompo(new Attaquant('Henry', 98, 89, 80, 70, 75));
$arsenul->setCompo(new Attaquant('Bob', 58, 78, 80, 70, 75));
$arsenul->setCompo(new Attaquant('Fred', 98, 89, 80, 70, 75));
$arsenul->afficherCompo();
echo $arsenul->getCompo()[0]->getNomJoueur();
echo $arsenul->getCompo()[1]->getGeneralJoueur();
