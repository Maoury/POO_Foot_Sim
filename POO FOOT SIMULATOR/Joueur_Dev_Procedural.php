<?php
$Joueur1 = ["Nom" => "Boubou", "Poste" => "Gardien", "Physique" => 10, "Endurance" => 10, "Vitesse" => 10, "Tir" => 10];
$Joueur2 = ["Nom" => "Karim", "Poste" => "Defenseur", "Physique" => 10, "Endurance" => 4, "Vitesse" => 8, "Tir" => 10];
$Joueur3 = ["Nom" => "Damien", "Poste" => "Milieu", "Physique" => 8, "Endurance" => 7, "Vitesse" => 6, "Tir" => 7];
$Joueur4 = ["Nom" => "Mamadou", "Poste" => "Attaquant", "Physique" => 4, "Endurance" => 10, "Vitesse" => 10, "Tir" => 10];

var_dump($Joueur1);

$joueur_phy = 82;
$joueur_nom = "Henry";
$joueur_tir = 83;
$joueur_poste = "ATQ";

$Henry = new Joueur("Henry","ATQ", 83, 87);
?>
