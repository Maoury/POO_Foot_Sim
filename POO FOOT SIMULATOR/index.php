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
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate
echo $arsenul->getCompo()[0]->getNomJoueur().' ';
echo $arsenul->getCompo()[0]->getGeneralJoueur().'<br>';

echo $arsenul->getCompo()[1]->getNomJoueur().' ';
echo $arsenul->getCompo()[1]->getGeneralJoueur().'<br>';

echo $arsenul->getCompo()[2]->getNomJoueur().' ';
echo $arsenul->getCompo()[2]->getGeneralJoueur().'<br>';
echo $arsenul->calculMoyenne();
echo"<br>";


$barca = new Equipe('barca');
//on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$barca->setCompo(new Attaquant('Messi', 95, 89, 90, 76, 79));
$barca->setCompo(new Attaquant('Boubou', 68, 68, 70, 50, 72));
$barca->setCompo(new Attaquant('Sala', 92, 79, 85, 70, 77));
$barca->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate
echo $barca->getCompo()[0]->getNomJoueur().' ';
echo $barca->getCompo()[0]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[1]->getNomJoueur().' ';
echo $barca->getCompo()[1]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[2]->getNomJoueur().' ';
echo $barca->getCompo()[2]->getGeneralJoueur().'<br>';
echo $barca->calculMoyenne();
