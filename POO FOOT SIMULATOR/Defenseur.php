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
    $this->_general = defenseCalcul();
  }
}
