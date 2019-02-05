<?php
class Milieu extends Joueur
{

    public function milieuCalcul()
    {
      // Permet de calculer la valeur générale d'un milieu de terrain
      return ($this->_physique + $this->_endurance + $this->_vitesse + $this->_tir + $this->_dribble)/5;
    }

    public function setGeneral() // Attribuer une valeur générale à un milieu de terrain
    {
        $this->_general = milieuCalcul();
    }

    //Constructeur
    public function __construct($nom, $poste, $physique, $endurance, $vitesse, $dribble, $tir)
    {
      $this->setNomJoueur($nom);
      $this->setPhysiqueJoueur($physique);
      $this->setEnduranceJoueur($endurance);
      $this->setVitesseJoueur($vitesse);
      $this->setDribbleJoueur($dribble);
      $this->setTirJoueur($tir);
    }
}
