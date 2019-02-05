<?php

// Initialisation de la classe 'Joueur'
 class Joueur
{
  private $_nom;
  private $_poste;
  private $_physique;
  private $_endurance;
  private $_vitesse;
  private $_dribble;
  private $_tir;
  private $_general;

  // GETTERS
  public function getNomJoueur()
  {
    return $this->_nom; // Obtenir le nom du joueur
  }

  public function getPosteJoueur()
  {
    return $this->_poste; // Obtenir le poste du joueur
  }

  public function getPhysiqueJoueur()
  {
    return $this->_physique; // Obtenir les capacités physiques du joueur
  }

  public function getEnduranceJoueur()
  {
    return $this->_endurance; // Obtenir l'endurance du joueur
  }

  public function getVitesseJoueur()
  {
    return $this->_vitesse; // Obtenir la vitesse du joueur
  }

  public function getDribbleJoueur()
  {
    return $this->_dribble; // Obtenir les capacités de 'dribbles' du joueur
  }

  public function getTirJoueur()
  {
    return $this->_tir; // Obtenir les capacités de 'tirs' du joueur
  }

  public function getGeneralJoueur()
  {
    return $this->_general; // Obtenir la valeur générale du joueur
  }


  // SETTERS
  public function setNomJoueur($nom)
  {
    $this->_nom = $nom; // Attribuer un nom de joueur
  }

  public function setPosteJoueur($poste)
  {
    $this->_poste = $poste; // Attribuer un poste à un joueur
  }

  public function setPhysiqueJoueur($physique)
  {
    $this->_physique = $physique ; // Attribuer une capacité physique à un joueur
  }

  public function setEnduranceJoueur($endurance)
  {
    $this->_endurance = $endurance ; // Attribuer une capacité d'endurance à un joueur
  }

  public function setVitesseJoueur($vitesse)
  {
    $this->_vitesse = $vitesse; // Attribuer une capacité 'vitesse' à un joueur
  }

  public function setDribbleJoueur($dribble)
  {
    $this->_dribble = $dribble; // Attribuer une capacité 'dribble' à un joueur
  }

  public function setTirJoueur($tir)
  {
    $this->_tir = $tir; // Attribuer une capacité 'tir' à un joueur
  }
  // Constructeur
  public function __construct($nom, $poste, $physique, $endurance, $vitesse, $dribble, $tir)
  {
    $this->setNomJoueur($nom);
    $this->setPhysiqueJoueur($physique);
    $this->setEnduranceJoueur($endurance);
    $this->setVitesseJoueur($vitesse);
    $this->setDribbleJoueur($dribble);
    $this->setTirJoueur($tir);`
  }
}
