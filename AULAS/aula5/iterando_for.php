<?php
  
   print "**TOP FIVE HEROIS DO MUNDO**<br /><br />";
   
   $herois = array('Batman', 'Superman', 'Mulher Maravilha', 'Flash', 'Jaspion');

   $herois[88] = "aiodjasijda";

   foreach ($herois as $chave => $valor) {
       print "$chave - - - $valor" . "<br />";
   }