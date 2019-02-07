<?php

// On commence par ajouter les classes parentes
require 'Joueur.php';
require 'Equipe.php';

// Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';


// On peut instancier un objet avec son constructeur dans différents endroits

// On initialise la première équipe
$arsenul = new Equipe('Arsenul');

// On initialise les joueurs de cette équipe
$arsenul->setCompo(new Attaquant('Henry', 98, 89, 80, 70, 35));
$arsenul->setCompo(new Attaquant('Bob', 58, 78, 80, 70, 90));
$arsenul->setCompo(new Attaquant('Fred', 98, 89, 80, 70, 85));

// On affiche la composition de l'équipe
echo 'Composition de l\'équipe ' . $arsenul->getNomEquipe() . ' (Moyenne stats : ' . $arsenul->calculMoyenne() . ') : <br> <br>';
$arsenul->afficherCompo();
echo '<br> Meilleur buteur : ';
$arsenul->meilleurTireur();
echo"<br> <br>";


// On initialise la seconde équipe ainsi que ses joueurs puis on affiche sa composition
$barca = new Equipe('barca');

$barca->setCompo(new Attaquant('Messi', 95, 89, 90, 76, 79));
$barca->setCompo(new Attaquant('Boubou', 68, 68, 70, 50, 72));
$barca->setCompo(new Attaquant('Sala', 92, 79, 85, 70, 77));

echo 'Composition de l\'équipe ' . $barca->getNomEquipe() . ' (Moyenne stats : ' . $barca->calculMoyenne() . ') : <br> <br>';
$barca->afficherCompo();
echo '<br> Meilleur buteur : ';
$barca->meilleurTireur();
echo"<br> <br>";

//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate

/*echo $barca->getCompo()[0]->getNomJoueur().' ';
echo $barca->getCompo()[0]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[1]->getNomJoueur().' ';
echo $barca->getCompo()[1]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[2]->getNomJoueur().' ';
echo $barca->getCompo()[2]->getGeneralJoueur().'<br>';*/


// ON APPELLE cette fonction en indiquant la classe dans laquelle elle se situe puisqu'elle ne dépend d'aucun objet (statique)
echo 'Résultat du match : ';
Equipe::EquipeGagnante($barca, $arsenul);


/* 

Créer plusieurs joueurs
Sélectionner aléatoirement les joueurs pour les équipes ?
Sélectionner aléatoirement les équipes ?

*/