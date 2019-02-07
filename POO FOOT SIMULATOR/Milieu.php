<?php
class Milieu extends Joueur
{
  public function milieuCalcul()
  {
    // Permet de calculer la valeur générale d'un milieu de terrain
    return ($this->_physique + $this->_endurance + $this->_vitesse + $this->_tir + $this->_dribble)/5;
  }

  public function setGeneral() // Attribuer une valeur générale à un milieu de terrain
  {
    // PAS OUBLIER LES THIS LORSQUE L'ON EST DANS LA CLASSE
    $this->_general = round($this->milieuCalcul());
  }


  //Constructeur
  public function __construct($nom, $physique, $endurance, $vitesse, $dribble, $tir)
  {
    parent::__construct($nom, $physique, $endurance, $vitesse, $dribble, $tir);
    $this->setGeneral();
     $this->setPasseJoueur();
  }
}