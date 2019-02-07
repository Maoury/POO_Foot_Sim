<?php
function Match()
{

  $choixEquipe = mt_rand([0,1]);
  do {

    $equipe[$choixEquipe][1] = nouvelleOccasion($equipe[$choixEquipe]);

    $choixEquipe = ($choixEquipe == 0) ? 1 : 0;

  }while($equipe[0][1] != 0 && $equipe[1][1] != 0);

}
  function testNbrPasses()
  {
    $nbPasses = mt_rand( [5, 12]);
    return $nbPasses;
  }



  function nouvelleOccasion($equipe){
    $equipeobj  = $equipe[0];
    $equipeOcaz = $equipe[1];

    $nbPasses = mt_rand([1, 15]);

    $i = 0;

    do {
      if($equipeobj->calculMoyennePasse() < mt_rand([0, 110]) )
      {
        echo  $equipeobj->getNomEquipe() . ' à perdu la balle' ;
        $i=15;
      }
      $i++;
    }while($i < $nbPasses);

    return --$equipeOcaz;
  }
