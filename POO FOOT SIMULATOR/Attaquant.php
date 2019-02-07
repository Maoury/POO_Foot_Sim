<?php
class Attaquant extends Joueur
{
  public function attaqueCalcul()
  {
    // Permet de calculer la valeur générale d'un attaquant
    return ($this->_dribble + $this->_tir + $this->_vitesse)/3;
  }

  public function setGeneral() // Attribuer une valeur générale à un attaquant
  {
    // PAS OUBLIER LES THIS LORSQUE L'ON EST DANS LA CLASSE
    $this->_general = round($this->attaqueCalcul());
  }


  public function __construct($nom, $physique, $endurance, $vitesse, $dribble, $tir)
  {
    parent::__construct($nom, $physique, $endurance, $vitesse, $dribble, $tir);
    $this->setGeneral();
    $this->setPasseJoueur();
  }
}