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
    // ON FAIT un foreach pour décomposer le array
    foreach($this->_compo as $joueur){
      //on utilise la fonction getNom pour afficher juste le nom du joueur et non l'objet entier (problème de typage : string)
      echo $joueur->getNomJoueur() . '<br>';
    }
  }

// Constructeur
public function __construct($nom)
{
  $this->setNomEquipe($nom);
}
}
