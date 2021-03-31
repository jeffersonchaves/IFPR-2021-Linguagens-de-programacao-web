<?php
  
   print "**TOP FIVE HEROIS DO MUNDO**\n";
   
   $herois_marvel = array('Batman', 'Superman', 'Mulher Maravilha', 'Flash', 'Jaspion');

   $herois_dc = array("Superman", "Homem de Ferro");

   $herois_juntos = array_merge($herois_marvel, $herois_dc);

   rsort($herois_juntos);

   print_r($herois_juntos);