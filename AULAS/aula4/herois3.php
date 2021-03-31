<?php
   #versao1
   print "**TOP FIVE HEROIS DO MUNDO**\n";
   
   $herois = array('Batman', 'Superman', 'Mulher Maravilha', 'Flash', 'Jaspion');
   
   print "1 lugar: $herois[0] \n";
   print "2 lugar: $herois[1] \n";
   print "3 lugar: $herois[2] \n";
   print "4 lugar: $herois[3] \n";
   print "5 lugar: $herois[4] \n";
   $herois[18] = "Hulk";
   $herois[] = "Deadpool";

   //print "6 lugar: $herois[5] \n";

   print_r($herois);


   