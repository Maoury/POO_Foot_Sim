<?php

class Equipe
{
  private $_nom;
  private $_drapeau;
  private $_compo = array();
  // Getters
  public function getNomEquipe()
  {
    return $this->_nom;
  }

  public function getDrapeauEquipe()
  {
    return $this->_drapeau;
  }

  // Setters
  public function setNomEquipe($nom)
  {
    $this->_nom = $nom;
  }

  public function setDrapeauEquipe($drapeau)
  {
    $this->_drapeau = $drapeau;
  }
  public function setCompo(Joueur $joueur)
  {
    array_push($this->compo, $joueur);
  }
}
