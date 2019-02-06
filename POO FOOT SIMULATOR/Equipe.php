<?php

class Equipe
{
  private $_moyenne;
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
  public function calculMoyenne()
  {
    //pour compter le nombre de joueur
    $nbJoueur = 0;
    //on boucle le tableau contenant les joueurs
    foreach($this->_compo as $joueur)
    {
      //A chaque itération on ajoute la valeur general du joueur dans une variable
      $this->_moyenne += $joueur->getGeneralJoueur();
      // et on compte le nombre de joueur
      $nbJoueur++;
    }
    // on divise la moyenne par le nombre de de joueur
    $this->_moyenne = $this->_moyenne/$nbJoueur;
    echo $this->getNomEquipe() . ' GENERAL ' . $this->_moyenne;
  }
// Constructeur
public function __construct($nom)
{
  $this->setNomEquipe($nom);
}
}
