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
  public function getCompo()
  {
    return $this->_compo;
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
    // deplace la variable joueur dans le tableau compo
    array_push($this->compo, $joueur);
  }

}
