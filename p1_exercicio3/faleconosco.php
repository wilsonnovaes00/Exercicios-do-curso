<?php include_once("topo.php");?>

<link rel="stylesheet" type="text/css" href="css/form.css">


	<!--  Conteúdo -->
	<center>
	<div id="formulario">
	<h2 style="color: #975997;">Envie Sua Mensagem</h2>
	
	<form class="form">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="">
			<label for="name">Nome</label>
		</p>
		
		<p class="email">
			<input type="text" name="email" id="email" placeholder="" />
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="text" name="web" id="web" placeholder="" />
			<label for="web">Asunto</label>
		</p>		
	
		<p class="text">
			<textarea name="text" placeholder="" /></textarea>
		</p>
		
		<p class="submit">
			<input type="submit" value="Enviar" />
		</p>
	</form>

	
	</div></center>





	<br/><br/><br/>

		
		<div id="nagevacao" style="position: relative; left: 34px;top: -23px;">Página: <span id="pag">FALE CONOSCO<span></span></div>
		<!-- Incluindo footer/Rodapé -->
			<? include_once("footer.php");?>




