<?php
class Defenseur extends Joueur
{
  public function defenseCalcul()
  {
    // Permet de calculer la valeur générale d'un défenseur
    return ($this->_physique + $this->_endurance + $this->_vitesse)/3;
  }
  public function setGeneral() // Attribuer une valeur générale à un defenseur selon ses caractéristique
  {
    // PAS OUBLIER LES THIS LORSQUE L'ON EST DANS LA CLASSE
    $this->_general = $this->defenseCalcul();
  }
  //Constructeur
  public function __construct($nom, $poste, $physique, $endurance, $vitesse, $dribble, $tir)
  {
    $this->setNomJoueur($nom);
    $this->setPhysiqueJoueur($physique);
    $this->setEnduranceJoueur($endurance);
    $this->setVitesseJoueur($vitesse);
    $this->setDribbleJoueur($dribble);
    $this->setTirJoueur($tir);
    $this->setGeneral();
  }
}
