<?php
  //Creation de tableau indexe
  $personnes = ["Pierre Theodore","Joseph Rachelle","Pascal Ronald","Jules Monha"];

  $per[] = "Guillaume Kendy";
  $per[] = "Figaro Magdalie";
  $per[] = "Pierre Guerline";
 
   echo $personnes[2];
    echo"\n";
   echo count($per);

   //Creation de tableau associatif
   $p =['Nom'=>'Pierre Gerome','Age'=>23];
   echo "\n";
   echo $p['Nom'].",Age :".$p['Age']." ans";

   //tableau multidimentionnel
   $tb = [
       ['Nom'=>'Cassagnol','Prenom'=>'Sandra','Age'=>38],
       ['Nom'=>'Melan','Prenom'=>'Chedlin','Age'=>22],
       ['Nom'=>'Pierre','Prenom'=>'David','Age'=>27]
   ];
    echo "\n";
  echo $tb[0]['Nom'].' '. $tb[0]['Prenom'].' '. $tb[0]['Age'];
echo "\n\n--------------------------------------------------------\n\n";
  foreach($tb as $t)
  {
    echo $t['Nom'] . ' ' . $t['Prenom'] . ' ' . $t['Age']."\n";
  }



  ?>