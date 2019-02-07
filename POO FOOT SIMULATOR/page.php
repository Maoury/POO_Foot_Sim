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
 <h1> <----- fOOT DE RUE -----> </h1>
</div>

<div id="main">
 <div id="menu">
  <h1> <--- EQUIPE ---> </h1>
   <p>
  	<?php 
       
    $arsenul = new Equipe('Arsenul');
// on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$arsenul->setCompo(new Attaquant('Henry', rand(10, 90), 89, 80, rand(10, 30), 75));
$arsenul->setCompo(new Attaquant('Bob', rand(0, 98), 78, rand(10, 90), 70, 75));
$arsenul->setCompo(new Attaquant('Fred', 98, rand(0, 78), 80, rand(10, 30), rand(10, 75)));

echo"La composition de léquipe d'arsenul -->";
echo"<br>";
//$arsenul->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate

//Pour le goal....
echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Gardien : ';
echo $arsenul->getCompo()[0]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Gardien : ';
//echo $arsenul->getCompo()[0]->getPosteJoueur().'<br>';
echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Endurance : ';
echo $arsenul->getCompo()[0]->getEnduranceJoueur().'<br>';
echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Vitesse : ';
echo $arsenul->getCompo()[0]->getVitesseJoueur().'<br>';
echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Dribble : ';
echo $arsenul->getCompo()[0]->getDribbleJoueur().'<br>';
echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Tir : ';
echo $arsenul->getCompo()[0]->getTirJoueur().'<br>';

echo"<br>";
//Pour le Defenseur....
echo $arsenul->getCompo()[1]->getNomJoueur().' --> Defenseur : ';
echo $arsenul->getCompo()[1]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Defenseur : ';
//echo $arsenul->getCompo()[1]->getPosteJoueur().'<br>';
echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Endurance : ';
echo $arsenul->getCompo()[1]->getEnduranceJoueur().'<br>';
echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Vitesse : ';
echo $arsenul->getCompo()[1]->getVitesseJoueur().'<br>';
echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Dribble : ';
echo $arsenul->getCompo()[1]->getDribbleJoueur().'<br>';
echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Tir : ';
echo $arsenul->getCompo()[1]->getTirJoueur().'<br>';

echo"<br>";
//Pour le Attaquant....
echo $arsenul->getCompo()[2]->getNomJoueur().' --> Attaquant : ';
echo $arsenul->getCompo()[2]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Defenseur : ';
//echo $arsenul->getCompo()[2]->getPosteJoueur().'<br>';
echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Endurance : ';
echo $arsenul->getCompo()[2]->getEnduranceJoueur().'<br>';
echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Vitesse : ';
echo $arsenul->getCompo()[2]->getVitesseJoueur().'<br>';
echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Dribble : ';
echo $arsenul->getCompo()[2]->getDribbleJoueur().'<br>';
echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Tir : ';
echo $arsenul->getCompo()[2]->getTirJoueur().'<br>';

echo"<br>";
 
$barca = new Equipe('barca');
//on peut instancier un objet avec son constructeur dans différents endroits
// ILLUSTRATION:
$barca->setCompo(new Attaquant('Messi', rand(10, 100), rand(10, 30), 90, 76, rand(10, 40)));
$barca->setCompo(new Attaquant('Boubou', rand(20, 100), 98, 79, rand(10, 60), 75));
$barca->setCompo(new Attaquant('Sala', rand(0, 100), 79, rand(10, 20), 70, rand(10, 90)));
echo"La composition de léquipe du barca -->";
echo"<br>";
//$barca->afficherCompo();
//Pour afficher un certain joueur on utilise les coordonnée du tableaux afin de selectionner l'item désiré et regarder son contenu avec la méthode adéquate
//Pour le goal....
echo $barca->getCompo()[0]->getNomJoueur().'  --> Gardien : ';
echo $barca->getCompo()[0]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[0]->getNomJoueur().'  --> Gardien : ';
//echo $arsenul->getCompo()[0]->getPosteJoueur().'<br>';
echo $barca->getCompo()[0]->getNomJoueur().'  --> Endurance : ';
echo $barca->getCompo()[0]->getEnduranceJoueur().'<br>';
echo $barca->getCompo()[0]->getNomJoueur().'  --> Vitesse : ';
echo $barca->getCompo()[0]->getVitesseJoueur().'<br>';
echo $barca->getCompo()[0]->getNomJoueur().'  --> Dribble : ';
echo $barca->getCompo()[0]->getDribbleJoueur().'<br>';
echo $barca->getCompo()[0]->getNomJoueur().'  --> Tir : ';
echo $barca->getCompo()[0]->getTirJoueur().'<br>';

echo"<br>";
//Pour le Defenseur....
echo $barca->getCompo()[1]->getNomJoueur().' --> Defenseur : ';
echo $barca->getCompo()[1]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[1]->getNomJoueur().'  --> Defenseur : ';
//echo $arsenul->getCompo()[1]->getPosteJoueur().'<br>';
echo $barca->getCompo()[1]->getNomJoueur().'  --> Endurance : ';
echo $barca->getCompo()[1]->getEnduranceJoueur().'<br>';
echo $barca->getCompo()[1]->getNomJoueur().'  --> Vitesse : ';
echo $barca->getCompo()[1]->getVitesseJoueur().'<br>';
echo $barca->getCompo()[1]->getNomJoueur().'  --> Dribble : ';
echo $barca->getCompo()[1]->getDribbleJoueur().'<br>';
echo $barca->getCompo()[1]->getNomJoueur().'  --> Tir : ';
echo $barca->getCompo()[1]->getTirJoueur().'<br>';

echo"<br>";
//Pour le Attaquant....
echo $barca->getCompo()[2]->getNomJoueur().' --> Attaquant : ';
echo $barca->getCompo()[2]->getGeneralJoueur().'<br>';
//echo $arsenul->getCompo()[2]->getNomJoueur().'  --> Defenseur : ';
//echo $arsenul->getCompo()[2]->getPosteJoueur().'<br>';
echo $barca->getCompo()[2]->getNomJoueur().'  --> Endurance : ';
echo $barca->getCompo()[2]->getEnduranceJoueur().'<br>';
echo $barca->getCompo()[2]->getNomJoueur().'  --> Vitesse : ';
echo $barca->getCompo()[2]->getVitesseJoueur().'<br>';
echo $barca->getCompo()[2]->getNomJoueur().'  --> Dribble : ';
echo $barca->getCompo()[2]->getDribbleJoueur().'<br>';
echo $barca->getCompo()[2]->getNomJoueur().'  --> Tir : ';
echo $barca->getCompo()[2]->getTirJoueur().'<br>';

    ?>
  </p>
 </div>

 <div id="contenu">
   <h1> <--- DEROULEMENT DES MATCHES ---> </h1>
      
       <div id="deroulement">
       <?php
       //fonction pour dire quelle equipe commence...
function matchCommence($equipe1, $equipe2)
{
         echo"<br>";
         echo "<h2><----------------    le match commence   -------------></h2>";
         echo"<br>";
    
     
    
    if($equipe1->getCompo()[0]->getPhysiqueJoueur() < 
       $equipe2->getCompo()[0]->getPhysiqueJoueur()) 
    
    {
        echo"<br>";
        echo "<-------- La balle est pour l'équipe du Arsenul -------->"; 
        echo"<br>";
    }

    elseif ($equipe1->getCompo()[0]->getPhysiqueJoueur() > 
       $equipe2->getCompo()[0]->getPhysiqueJoueur())
    
    {   
        echo"<br>";
        echo "<--------  La balle est pour l'équipe du barca ----------->";
        echo"<br>";
    }
     
     else { "<------ Le match est trés sérré ------->";}
    


}
matchCommence($barca, $arsenul);


//fonction pour dire que le match continue...
function matchContinue($equipe1, $equipe2)
{
         echo"<br>";
         echo "<---------------  le match continue  ------------------->";
         echo"<br>";
    
     
    
    if($equipe1->getCompo()[0]->getGeneralJoueur() + 
       $equipe1->getCompo()[1]->getGeneralJoueur() + 
       $equipe1->getCompo()[2]->getGeneralJoueur() < 
       $equipe2->getCompo()[0]->getGeneralJoueur() + 
       $equipe2->getCompo()[1]->getGeneralJoueur() + 
       $equipe2->getCompo()[2]->getGeneralJoueur()) 
    
    {
        echo"<br>";
         echo "<-------  le match continue et c'est l'équipe d' Arsenul qui reprend l'avantage  ------->";
         echo"<br>";
    }

    elseif ($equipe1->getCompo()[0]->getGeneralJoueur() + 
            $equipe1->getCompo()[1]->getGeneralJoueur() + 
            $equipe1->getCompo()[2]->getGeneralJoueur() > 
            $equipe2->getCompo()[0]->getGeneralJoueur() + 
            $equipe2->getCompo()[1]->getGeneralJoueur() + 
            $equipe2->getCompo()[2]->getGeneralJoueur())
    
    {   
        echo"<br>";
         echo "<------  le match continue et c'est l'équipe du barca qui reprend l'avantage  ------->";
         echo"<br>";
    }
     
     else { " Le matche continue----->";}
    


}
matchContinue($barca, $arsenul);


//fonction pour dire qui a finalement la balle
function matchCommence1($equipe1, $equipe2)
{
         echo"<br>";
         echo "<---------------------  le match est trés mitigé  -------------------->";
         echo"<br>";
    
     
    
    if($equipe1->getCompo()[0]->getPhysiqueJoueur() + 
       $equipe1->getCompo()[1]->getPhysiqueJoueur() + 
       $equipe1->getCompo()[2]->getPhysiqueJoueur() < 
       $equipe2->getCompo()[0]->getPhysiqueJoueur() + 
       $equipe2->getCompo()[1]->getPhysiqueJoueur() + 
       $equipe2->getCompo()[2]->getPhysiqueJoueur()) 
    
    {
        echo"<br>";
        echo "<--------  Mais c'est toujours l'equipe d'Arsenul qui a la balle  -------->"; 
        echo"<br>";
    }

    elseif ($equipe1->getCompo()[0]->getPhysiqueJoueur() + 
            $equipe1->getCompo()[1]->getPhysiqueJoueur() + 
            $equipe1->getCompo()[2]->getPhysiqueJoueur() > 
            $equipe2->getCompo()[0]->getPhysiqueJoueur() + 
            $equipe2->getCompo()[1]->getPhysiqueJoueur() + 
            $equipe2->getCompo()[2]->getPhysiqueJoueur())
    
    {   
        echo"<br>";
        echo "<---------- Mais c'est toujours l'equipe du barca qui a la balle   ------------>";
        echo"<br>";
    }
     
     else { " Le match est trés sérré   ---------------->";}
    

}
matchCommence1($barca, $arsenul);

       ?>
           
       </div>
   <div id="deroulement1">
       
       <?php
     //fonction de l'equipe qui guagne avec un randum des joueurs...
 function equipeGenerImagGagne1($equipe1, $equipe2)
{
         echo"<br>";
         echo "<---- l'équipe gagnante ---->";
         echo"<br>";
    header ("Content-type: png");
    $image = imagecreatefrompng("barca.png");
     
    
    if($equipe1->getCompo()[0]->getGeneralJoueur() + 
       $equipe1->getCompo()[1]->getGeneralJoueur() + 
       $equipe1->getCompo()[2]->getGeneralJoueur() < 
       $equipe2->getCompo()[0]->getGeneralJoueur() + 
       $equipe2->getCompo()[1]->getGeneralJoueur() + 
       $equipe2->getCompo()[2]->getGeneralJoueur()) 
    
    {
        echo"<br>";
         echo "";
        echo"<br>";
         
    }

    elseif ($equipe1->getCompo()[0]->getGeneralJoueur() + 
            $equipe1->getCompo()[1]->getGeneralJoueur() + 
            $equipe1->getCompo()[2]->getGeneralJoueur() > 
            $equipe2->getCompo()[0]->getGeneralJoueur() + 
            $equipe2->getCompo()[1]->getGeneralJoueur() + 
            $equipe2->getCompo()[2]->getGeneralJoueur())
    
    {   
        echo"<br>";
        echo "";
        echo"<br>";
    }
     
    //imagepng($image);
}

equipeGenerImagGagne1($barca, $arsenul);
     ?>
     
   </div>     
 </div>
     
<div id="footer">
 <h1> <--- LE GAGNANT ---> </h1>
     <div id="deroulement2">
     <?php
     //fonction de l'equipe qui guagne avec un randum des joueurs...
 function equipeGagne($equipe1, $equipe2)
{
         echo"<br>";
         echo "<-------------------  le match est trés trés trés trés trés chaud  ------------------>";
         echo"<br>";
    
     
    
    if($equipe1->getCompo()[0]->getGeneralJoueur() + 
       $equipe1->getCompo()[1]->getGeneralJoueur() + 
       $equipe1->getCompo()[2]->getGeneralJoueur() < 
       $equipe2->getCompo()[0]->getGeneralJoueur() + 
       $equipe2->getCompo()[1]->getGeneralJoueur() + 
       $equipe2->getCompo()[2]->getGeneralJoueur()) 
    
    {
        echo"<br>";
        echo " <h4><---------- l'équipe du barca a trés bien joué mais c'est l'équipe d'Arsenul qui gagne le match -----------></h4>"; 
        echo"<br>";
    }

    elseif ($equipe1->getCompo()[0]->getGeneralJoueur() + 
            $equipe1->getCompo()[1]->getGeneralJoueur() + 
            $equipe1->getCompo()[2]->getGeneralJoueur() > 
            $equipe2->getCompo()[0]->getGeneralJoueur() + 
            $equipe2->getCompo()[1]->getGeneralJoueur() + 
            $equipe2->getCompo()[2]->getGeneralJoueur())
    
    {   
        echo"<br>";
        echo " <h4><-------- l'équipe d'Arsenul a trés bien joué mais c'est l'équipe du barca qui gagne le match -------> </h4>";
        echo"<br>";
    }
     
     
}

equipeGagne($barca, $arsenul);
     ?>
     </div>  
</div>


</body>
</html>












