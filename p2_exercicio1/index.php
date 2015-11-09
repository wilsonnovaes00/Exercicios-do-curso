<?php







$numeros = array();



for ($i=0; $i < 5 ; $i++) { 
	$aleatorio = rand(1, 100);
	$numeros[$i] = $aleatorio;

	if ($numeros[$i] % 2 == 0) {
		echo $numeros[$i]. " = Par" .'<br/>';
	}else{
		echo $numeros[$i] . " = Impar" .'<br/>';
	}

	

}


