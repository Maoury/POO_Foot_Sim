<?php

class Joueur()
{
  private $_physique;
  private $_nom;
  private $_endurance;
  private $_vitesse;
  private $_dribble;
  private $_tir;
  private $_poste;
  private $_general;
}

public function defenseCalcul()
{
  //permet de calculer la valeur général d'un défenseur
  return ($this->_physique + $this->_endurance + $this->_vitesse)/3;

}
public function attaqueCalcul()
{
  //permet de calculer la valeur général d'un attaquant
  return ($this->_dribble + $this->_tir + $this->_vitesse)/3;

}
public function milieuCalcul()
{
  //permet de calculer la valeur général d'un milieu
  return ($this->_physique + $this->_endurance + $this->_vitesse + $this->_tir + $this->_dribble)/5;

}

// GETTERS
public function getNomJoueur()
{
  return $this->_nom;
}
public function getPhysiqueJoueur()
{
  return $this->_physique;
}
public function getVitesseJoueur()
{
  return $this->_vitesse;
}
public function getEnduranceJoueur()
{
  return $this->_endurance;
}
public function getTirJoueur()
{
  return $this->_tir;
}
public function getDribbleJoueur()
{
  return $this->_dribble;
}
public function getPosteJoueur()
{
  return $this->_poste;
}
public function getGeneralJoueur()
{
  return $this->_general;
}

// Setters
public function setNomJoueur($nom)
{
  $this->_nom = $nom;
}
public function setPhysiqueJoueur($physique)
{
  $this->_physique = $physique ;
}
public function setEnduranceJoueur($endurance)
{
  $this->_endurance = $endurance ;
}
public function setVitesseJoueur($vitesse)
{
  $this->_vitesse = $vitesse;
}
public function setDribbleJoueur($dribble)
{
  $this->_dribble = $dribble ;
}
public function setTirJoueur($tir)
{
  $this->_tir = $tir ;
}
public function setPosteJoueur($poste)
{
  $this->_poste = $poste ;
}

public function setGeneral ()
{
  if($this->_poste == 'ATQ')
  {
    $this->_general = attaqueCalcul();
  }
  else if($this->_poste == 'DEF')
  {
    $this->_general = defenseCalcul();
  }
  else if($this->_poste == 'MID')
  {
    $this->_general = milieuCalcul();
  }
  else {
    {
      echo "errrorrrrrrrrrrrrr";
    }
  }
}
// Constructeur
public function __construct($nom,$poste,$dribble,$tir,$vitesse,$endurance,$physique)
{
  $this->setNomJoueur($nom);
  $this->setPosteJoueur($poste);
  $this->setDribbleJoueur($dribble);
  $this->setTirJoueur($tir);
  $this->setVitesseJoueur($vitesse);
  $this->setEnduranceJoueur($endurance);
  $this->setPhysiqueJoueur($physique);
  $this->setGeneral();
}
