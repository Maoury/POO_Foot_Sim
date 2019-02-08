<?php 
     
require 'Joueur.php';
require 'Equipe.php';
//Puis les enfants
require 'Attaquant.php';
require 'Milieu.php';
require 'Defenseur.php';

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="./page.css">
<head>
	<title>Ma page de jeu</title>
</head>
<body>
<div id="entete">
 <h1> <----- FOOT DE RUE -----> </h1>
</div>

<div id="main">
 <div id="menu">
  <h1> <--- EQUIPE ---> </h1>
   <p>

  	<?php 
       
    // On peut instancier un objet avec son constructeur dans différents endroits

// On initialise la première équipe
$arsenul = new Equipe('Arsenul');

// On initialise les joueurs de cette équipe
$arsenul->setCompo(new Attaquant('Henry', 98, 89, 80, 70, 35));
$arsenul->setCompo(new Attaquant('Bob', 58, 78, 80, 70, 90));
$arsenul->setCompo(new Attaquant('Fred', 98, 89, 80, 70, 85));
$arsenul->setCompo(new Defenseur('Omar', 98, 89, 80, 70, 74));
$arsenul->setCompo(new Defenseur('Boubou', 87, 85, 83, 81, 79));
$arsenul->setCompo(new Milieu('Djibril', 89, 91, 90, 88, 75));

// On affiche la composition de l'équipe
echo 'Composition de l\'équipe ' . $arsenul->getNomEquipe() . ' (Moyenne stats : ' . $arsenul->calculMoyenne() . ') : <br> <br>';
$arsenul->afficherCompo();
echo '<br> Meilleur buteur : ';
echo $arsenul->nomMeilleurTireur() . ' (' . $arsenul->meilleurTireur() . ') <br>';
echo"<br> <br>";


// On initialise la seconde équipe ainsi que ses joueurs puis on affiche sa composition
$barca = new Equipe('barca');

$barca->setCompo(new Attaquant('Messi', 95, 89, 90, 76, 79));
$barca->setCompo(new Attaquant('Boubou', 68, 68, 70, 50, 72));
$barca->setCompo(new Attaquant('Sala', 92, 79, 85, 70, 77));
$barca->setCompo(new Defenseur('Boulbi', 94, 91, 82, 68, 76));
$barca->setCompo(new Defenseur('Jean-Michel PO', 87, 85, 83, 81, 79));
$barca->setCompo(new Milieu('Neimad', 87, 89, 85, 84, 69));

echo 'Composition de l\'équipe ' . $barca->getNomEquipe() . ' (Moyenne stats : ' . $barca->calculMoyenne() . ') : <br> <br>';
$barca->afficherCompo();
echo '<br> Meilleur buteur : ';
echo $barca->nomMeilleurTireur() . ' (' . $barca->meilleurTireur() . ') <br>';
echo"<br> <br>";

    ?>
  </p>
 </div>

 <div id="contenu">
   <h1> <--- DEROULEMENT DES MATCHES ---> </h1>
      
       <div id="deroulement">
       <?php
       function Match (Equipe $equipe1, Equipe $equipe2){

        //INITIALISATION DES VARIABLES
          $turn = "A";
          $score1 = 0;
          $score2 = 0;
          $moyennePasse1 = $equipe1->calculMoyennePasse();
          $moyennePasse2 = $equipe2->calculMoyennePasse();
          //LANCEMENT DE LA BOUCLE DE TOUTES LES OCCASION
          for ($occaz=5; $occaz > 0 ; $occaz--)
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
            //Au tour de la deuxieme equipe de faire une OCCASION
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
        match($barca, $arsenul);
     ?>
     
   </div>     
 </div>

</body>
</html>