<?php

#Variáveis

$a = 3+4*5;
$b = 8/4+2*3;
$c = 2*(10-3*3);
$d = 5*(3+(2+3))/2+1;
$e = 1+12/((7+2)/3)+(6-2);
$f = 3+16/2+5;
$g = 24 / 4-2;
$h = 11 % 4+9 / 3;
$i = sqrt (9)+ sqrt(16);
$j = 21 / 4 / 2;

#---------------------------------

?>

<!-- Iniciando o codigo html -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="UTF-8">
	<title>Resultado das expressões</title>
</head>
<body>

<table>
  <thead>
    <tr>
      <th colspan="9">Resultados das expressões</th>
    </tr>
    
  </thead>
  <tbody>
    <tr>
      <td>Posições</td>
      <td>Expressões</td>
      <td>Resultados</td>
      
    </tr>


    <tr>
      <td>A) </td>
      <td>3+4*5</td>
      <td><?=$a?></td>
      
    </tr>
    <tr>
      <td>B)</td>
      <td>8/4+2*3</td>
      <td><?=$b?></td>
    </tr>
    <tr>
      <td>C)</td>
      <td>2*(10-3*3)</td>
      <td><?php echo $c; ?></td>
    </tr>

    <tr>
      <td>D)</td>
      <td>5*(3+(2+3))/2+1</td>
      <td><?=$d?></td>
    </tr>



    <tr>
      <td>E)</td>
      <td>1+12/((7+2)/3)+(6-2)</td>
      <td><?php echo $e; ?></td>
    </tr>

	<tr>
      <td>F)</td>
      <td>3+16/2+5</td>
      <td><?php echo $f; ?></td>
    </tr>

    <tr>
      <td>G)</td>
      <td>24 / 4-2</td>
      <td><?=$g?></td>
    </tr>

    <tr>
      <td>H)</td>
      <td>11 % 4+9 / 3;</td>
      <td><?php echo $h; ?></td>
    </tr>

    <tr>
      <td>I)</td>
      <td>sqrt (9)+ sqrt(16)</td>
      <td><?php echo $i; ?></td>
    </tr>

    <tr>
      <td>J)</td>
      <td>21 / 4 / 2</td>
      <td><?=$j?></td>
    </tr>



  </tbody>
</table>
</body>
</html>

<!-- Fim do código HTML -->

