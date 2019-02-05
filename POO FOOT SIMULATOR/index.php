<?php
// On commence par ajouté les classes parentes
require 'Joueur.php';
require 'Equipe.php';
//Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';

$arsenul = new Equipe('Arsenul');
// on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$arsenul->setCompo(new Attaquant('Henry', 98, 89, 80, 70, 75));
$arsenul->setCompo(new Attaquant('Bob', 58, 78, 80, 70, 75));
$arsenul->setCompo(new Attaquant('Fred', 98, 89, 80, 70, 75));
$arsenul->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu
echo $arsenul->getCompo()[0]->getNomJoueur();
echo $arsenul->getCompo()[1]->getGeneralJoueur();
