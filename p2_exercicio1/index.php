<!-- Iniciando o codigo html -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>


<table>
  <thead>
    <tr>
      <th colspan="9">Verificando se é par ou Impar</th>
    </tr>
    
  </thead>
  <tbody>

<?php

#criando um array vazio 
$numeros = array();


#fazendo o laço for junto com a condição
for ($i=0; $i < 5 ; $i++) { 
	$aleatorio = rand(1, 100);
	$numeros[$i] = $aleatorio;

	if ($numeros[$i] % 2 == 0) {
		echo $numeros[$i]. " = Par" .'<br/>';
	}else{
		echo $numeros[$i] . " = Impar" .'<br/>';
	}

	

}

?>



#fim
