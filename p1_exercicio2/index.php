<?php

#Variáveis

$a = 6*(3+2);
$b = 2+(6*(3+2));
$c = 2+(3*6)/(2+4);
$d = 2*(8/(3+1));
$e = 3+(20-2)/(2*(9-6));
$f = (6/3)+(8/2);
$g = ((3+(8/2))*4)+(3*2);
$h = (6*(3*3)+6)-10;
$i = (((10*8)+3)*9);
$j = ((-12)*(-4))+(3*(-4));






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
      <td>Solução</td>
      <td>Resultado Final</td>
      
    </tr>


    <tr>
      <td>A) </td>
      <td>6*(3+2)</td>
      <td>6*5</td>
      <td><?=$a?></td>
    </tr>
    <tr>
      <td>B)</td>
      <td>2+(6*(3+2))</td>
      <td>2+(6*5)</td>
      <td><?=$b?></td>
    </tr>
    <tr>
      <td>C)</td>
      <td>2+(3*6)/(2+4)</td>
      <td>2+18/6</td>
      <td><?php echo $c; ?></td>
    </tr>

    <tr>
      <td>D)</td>
      <td>2*(8/(3+1))</td>
      <td>2*(8/4)</td>
      <td><?=$d?></td>
    </tr>



    <tr>
      <td>E)</td>
      <td>3+(20-2)/(2*(9-6))</td>
      <td>3+(20-2)/(2*3)</td>
      <td><?php echo $e; ?></td>
    </tr>

	<tr>
      <td>F)</td>
      <td>(6/3)+(8/2);</td>
      <td>6/3+8/2</td>
      <td><?php echo $f; ?></td>
    </tr>

    <tr>
      <td>G)</td>
      <td>2((3+(8/2))*4)+(3*2)</td>
      <td>(3+8/2)*4+3*2</td>
      <td><?=$g?></td>
    </tr>

    <tr>
      <td>H)</td>
      <td>(6*(3*3)+6)-10</td>
      <td>6*9+6-10</td>
      <td><?php echo $h; ?></td>
    </tr>

    <tr>
      <td>I)</td>
      <td>(((10*8)+3)*9)</td>
      <td>(10*8+3)*9</td>
      <td><?php echo $i; ?></td>
    </tr>

    <tr>
      <td>J)</td>
      <td>((-12)*(-4))+(3*(-4));</td>
      <td>(-12)*(-4)+(3*(-4))</td>
      <td><?=$j?></td>
    </tr>



  </tbody>
</table>
</body>
</html>

<!-- Fim do código HTML -->

