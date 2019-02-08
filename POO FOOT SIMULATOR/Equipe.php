<?php

class Equipe
{
  private $_nom;
  private $_compo = array();


  // GETTERS
  public function getNomEquipe()
  {
    return $this->_nom;
  }

  public function getCompo()
  {
    return $this->_compo;
  }

  
  // SETTERS
  public function setNomEquipe($nom)
  {
    $this->_nom = $nom;
  }

  public function setCompo(Joueur $joueur)
  {
    // deplace la variable joueur dans le tableau compo
    array_push($this->_compo, $joueur);
  }


  /// FONCTIONS DIVERSES ///

  // Afficher la composition de l'équipe
  public function afficherCompo()
  {
    // ON FAIT un foreach pour décomposer le array
    foreach($this->_compo as $joueur){
      //on utilise la fonction getNom pour afficher juste le nom du joueur et non l'objet entier (problème de typage : string)
      echo $joueur->getNomJoueur() . ' - ' . $joueur->getPosteJoueur() . ' (' . $joueur->getGeneralJoueur() . ') <br>';
    }
  }


  // Obtenir la moyenne generale d'une equipe
  public function calculMoyenne()
  {
    $moyenne = 0; // on initialise la moyenne à 0
    $nbJoueur = 0; // pour compter le nombre de joueur

    //on boucle le tableau contenant les joueurs
    foreach($this->_compo as $joueur)
    {
      // A chaque itération on ajoute la valeur generale du joueur dans une variable
      $moyenne += $joueur->getGeneralJoueur();
      // et on compte le nombre de joueur
      $nbJoueur++;
    }
    // on divise la moyenne par le nombre de de joueur
    return round($moyenne/$nbJoueur);
  }
// on fait une fonction static car elle ne requiet pas de this et ne dépend d'un bojet, c''est une fonctio qui s'execute normalement
  public static function EquipeGagnante(Equipe $equipe1, Equipe $equipe2)
  {
    if($equipe1->calculMoyenne() > $equipe2->calculMoyenne())
    {
      echo $equipe1->getNomEquipe() . ' a remporté le match.';
    }
    else
    {
      echo $equipe2->getNomEquipe() . ' a remporté le match.';
    }
  }


  // Obtenir le meilleur tireur de l'équipe
  public function meilleurTireur()
  {
    $tireur;
    $juninho = 0;
    foreach($this->_compo as $joueur)
    {
      if($juninho < $joueur->getTirJoueur())
      {
        $juninho = $joueur->getTirJoueur();
        $tireur = $joueur;
      }
    }
    //echo $tireur->getNomJoueur() . ' (' . $tireur->getTirJoueur() . ') <br>' ;
    //return $tireur;
    return $tireur->getTirJoueur();
  }

  // Fonction pour déterminer le meilleur au stats de tir de la fonction meilleurTireur
  public function nomMeilleurTireur()
  {
    $tireur;
    $juninho = 0;
    foreach($this->_compo as $joueur)
    {
      if($juninho < $joueur->getTirJoueur())
      {
        $juninho = $joueur->getTirJoueur();
        $tireur = $joueur;
      }
    }
    return $tireur->getNomJoueur();
  }

  // Calculer la moyenne générale du nombre de passes
  public function calculMoyennePasse()
  {
    $moyenne = 0;
    $nbJoueur = 0;

    foreach($this->_compo as $joueur){
      $moyenne += $joueur->getPasseJoueur();
      $nbJoueur++;
    }
    return round($moyenne/$nbJoueur);
  }


  // Constructeur
  public function __construct($nom)
  {
    $this->setNomEquipe($nom);
  }
}