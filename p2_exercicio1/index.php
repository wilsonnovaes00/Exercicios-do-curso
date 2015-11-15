<!-- Iniciando o codigo html -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<title>Verificar se é par ou impar</title>
</head>
<body>


<h1>Verfifica se é Par ou Impar</h1>
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

</tbody>
</table>
</body>
</html>

