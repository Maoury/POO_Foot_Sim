<?php

// Création d'un joueur en développement procédural : moins harmonieux, répétitif...

// Par le biais d'un tableau
$joueur1 = ["Nom" => "Henry", "Poste" => "ATQ", "Physique" => 8, "Endurance" => 8, "Vitesse" => 8, "Dribble" => 8, "Tir" => 8];
$joueur2 = ["Nom" => "Pas toi Zinédine", "Poste" => "ATQ", "Physique" => 10, "Endurance" => 10, "Vitesse" => 10, "Dribble" => 10, "Tir" => 10];

echo "Le joueur 1 a été crée et ses caractéristiques sont contenues dans le tableau suivant : <br>";
var_dump($joueur1); // Affiche les éléments contenus dans le tableau de $joueur1

echo "<br> <br>";
echo "Le joueur 2 \"". $joueur2['Nom'] . "\" a été crée et occupe le poste suivant : " . $joueur2['Poste'] . ".";
echo "<br> <br>";


// Alternative en créant des variables pour chaque élément constituant le joueur
$joueur1_nom = "Henry";
$joueur1_poste = "ATQ";
$joueur1_physique = 8;
$joueur1_endurance = 8;
$joueur1_vitesse = 8;
$joueur1_dribble = 8;
$joueur1_tir = 8;

$joueur2_nom = "Pas toi Zinédine";
$joueur2_poste = "ATQ";
$joueur2_physique = 10;
$joueur2_endurance = 10;
$joueur2_vitesse = 10;
$joueur2_dribble = 10;
$joueur2_tir = 10;

echo "Nom du joueur 1 : " . $joueur1_nom;
echo "<br>";
echo "Nom du joueur 2 : " . $joueur2_nom;
echo "<br> <br>";

// Modification d'une valeur déjà attribuée sans setter
$joueur1_nom = "Pavard"; // Le joueur "Henry" s'appelle désormais "Pavard"

echo "Le joueur 1 a été renommé, il s'appelle désormais : " . $joueur1_nom;