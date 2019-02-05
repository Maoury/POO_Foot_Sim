<?php

class Equipe
{
  private $_nom;
  private $_compo = array();
  // Getters
  public function getNomEquipe()
  {
    return $this->_nom;
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

  public function setCompo(Joueur $joueur)
  {
    // deplace la variable joueur dans le tableau compo
    array_push($this->_compo, $joueur);
  }

  public function afficherCompo(){
    foreach($this->_compo as $joueur){
      echo $joueur->getNomJoueur() . '<br>';
    }
  }

// Constructeur
public function __construct($nom)
{
  $this->setNomEquipe($nom);
}
}
