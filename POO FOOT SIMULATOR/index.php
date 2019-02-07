<?php
// On commence par ajouté les classes parentes
require 'Joueur.php';
require 'Equipe.php';
//Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';

$arsenul = new Equipe('Arsenul');
// on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$arsenul->setCompo(new Attaquant('Henry', 98, 89, 80, 70, 35));
$arsenul->setCompo(new Attaquant('Bob', 58, 78, 80, 70, 90));
$arsenul->setCompo(new Attaquant('Fred', 98, 89, 80, 70, 85));
$arsenul->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate
echo $arsenul->getCompo()[0]->getNomJoueur().' ';
echo $arsenul->getCompo()[0]->getGeneralJoueur().'<br>';

echo $arsenul->getCompo()[1]->getNomJoueur().' ';
echo $arsenul->getCompo()[1]->getGeneralJoueur().'<br>';

echo $arsenul->getCompo()[2]->getNomJoueur().' ';
echo $arsenul->getCompo()[2]->getGeneralJoueur().'<br>';
echo"<br>";


$barca = new Equipe('barca');
//on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$barca->setCompo(new Attaquant('Messi', 95, 89, 90, 76, 79));
$barca->setCompo(new Attaquant('Boubou', 68, 68, 70, 50, 72));
$barca->setCompo(new Attaquant('Sala', 92, 79, 85, 70, 77));
$barca->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate
echo $barca->getCompo()[0]->getNomJoueur().' ';
echo $barca->getCompo()[0]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[1]->getNomJoueur().' ';
echo $barca->getCompo()[1]->getGeneralJoueur().'<br>';

echo $barca->getCompo()[2]->getNomJoueur().' ';
echo $barca->getCompo()[2]->getGeneralJoueur().'<br>';
// ON APPEL cette fonction en indiquant la classe dans la quelle est ce situe vu quel ne dépend d'aucun objet ( statique)
//Equipe::EquipeGagnante($barca, $arsenul);

//lancement du match

function Match (Equipe $equipe1, Equipe $equipe2){

//INITIALISATION DES VARIABLES
  $turn = "A";
  $score1 = 0;
  $score2 = 0;
  $moyennePasse1 = $equipe1->calculMoyennePasse();
  $moyennePasse2 = $equipe2->calculMoyennePasse();
  //LANCEMENT DE LA BOUCLE DE TOUTES LES OCCASION
  for ($occaz=7; $occaz > 0 ; $occaz--)
  {
    // SI C EST A L EQUIPE 1 DE JOUER
    if ($turn == 'A')
    {
      $compteurPasse = 0;
      $nbpasse= rand(4, 10);
      //on fais le test de passe max pour arriver au but adverse
      for ($compteurPasse; $compteurPasse < $nbpasse; $compteurPasse++)
      {
        if($moyennePasse1 < mt_rand(0,100))
        {
          echo $equipe1->getNomEquipe(). ' à perdu le ballon!<br>';
          //on arrête la boucle si la balle est perdue
          break;
        }
        else {
          echo $equipe1->getNomEquipe() . ' avance sur le terrain!<br>';
          echo $compteurPasse .' '. $nbpasse .'<br>';
        }
          }
          //Si le nombre de passes n'est pas le bon
          if($compteurPasse != $nbpasse)
          {
            echo '<br>c\'est à l\'equipe '. $equipe2->getNomEquipe(). ' d\'attaquer <br>';
            $turn = 'B';
          }
          //Sinon
          else
          {
            if ($equipe1->meilleurTireur() > mt_rand(0, 100) )
            {
            echo ' GOOOOOOOOOOOOOOAL '.$equipe1->nomMeilleurTireur(). ' MARQUE CE BUT DE RÊVE<br>';
              $score1++;
              echo 'c\'est à l\'equipe '. $equipe2->getNomEquipe(). ' d\'attaquer <br>';
              $turn = 'B';
            }
            else
             {
               echo "C'est dommage ". $equipe1->nomMeilleurTireur().' à totalement raté son tir <br>';
               echo '<br>c\'est à l\'equipe '. $equipe2->getNomEquipe(). ' d\'attaquer <br>';
               $turn = 'B';
            }
      }
    }
    if ($turn == 'B')
    {
      $compteurPasse = 0;
      $nbpasse= rand(4, 10);
      //on fais le test de passe max pour arriver au but adverse
      for ($compteurPasse; $compteurPasse < $nbpasse; $compteurPasse++)
      {
        if($moyennePasse2 < mt_rand(0,100))
        {
          echo $equipe2->getNomEquipe(). ' à perdu le ballon!<br>';
          //on arrête la boucle si la balle est perdue
          break;
        }
        else {
          echo $equipe2->getNomEquipe() . ' avance sur le terrain!<br>';
          echo $compteurPasse .' '. $nbpasse .'<br>';
        }
        //Si le nombre de passes n'est pas le bon

          }


          if($compteurPasse != $nbpasse)
          {
            echo '<br>c\'est à l\'equipe '. $equipe1->getNomEquipe(). ' d\'attaquer <br>';
            $turn = 'A';
          }
          //Sinon
          else
          {
            // ON effectue un test pour verifier si le joueur va marquer après son tir
            if ($equipe2->meilleurTireur() > mt_rand(0, 100) )
            {
              echo ' GOOOOOOOOOOOOOOAL '. $equipe2->nomMeilleurTireur(). ' MARQUE CE BUT DE RÊVE<br>';
              $score2++;
              echo '<br>c\'est à l\'equipe  '. $equipe1->getNomEquipe(). ' d\'attaquer <br>';
              $turn = 'A';
        }
        //Sinon
        else {
           echo "C'est dommage ". $equipe2->nomMeilleurTireur().' à totalement raté son tir <br>';
           echo '<br>c\'est au '. $equipe1->getNomEquipe(). ' d\'attaquer <br>';
           $turn = 'A';
        }
      }
    }
  }
  echo $equipe1->getNomEquipe().' '. $score1.' - '.$equipe2->getNomEquipe().' '. $score2;
  if($score1 > $score2)
  {
    echo '<br>C\'est '. $equipe1->getNomEquipe() . ' qui remporte ce match';
  }
  else if ($score1 < $score2)
  {
    echo '<br>C\'est '. $equipe2->getNomEquipe() . ' qui remporte ce match';
  }
  else
  {
    echo '<br>C\'est un match nul ';

  }
}
match($Barca, $Arsenul);
