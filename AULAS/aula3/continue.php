<?php 


for($i = 0; $i < 10 ; $i++) { 

	if ($i >= 5 && $i <= 6) { 
	   continue;   /*interrompe a execucao da iteracao atual*/
	}
    
	print("escrevendo o número: " . $i . "\n"); 
}

