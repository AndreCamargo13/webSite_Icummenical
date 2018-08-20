<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Home - Site iCummenical</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header>
		<h1>Sejam Bem-vindos!!</h1>
		<img src="img/logo.png" alt="site iCummenical" title="site iCummenical">
	</header>

	<nav>
		<ul>
			<li><a href="">Home</a></li>
			<li><a href="">Eventos</a></li>
			<li><a href="">Agenda</a></li>
			<li><a href="">Litúrgias</a></li>
			<li><a href="">Seja um voluntário</a></li>
			<li><a href="">Contato</a></li>
				<form name="buscar" method="post" accept-charset="" enctype="multipart/form-data">
					<input type="text" name="busca">
					<input type="submit" name="buscar" value="Buscar" class="but">
				</form>
		</ul>
	</nav>

	<section></section>

	<aside></aside>

	<footer>
		<div id="rodape">
			<h2>&copy  <?php echo date('Y'); ?> - Todos os direitos reservados ao site iCummenical.com.br</h2>
		</div><!--RODAPE-->
	</footer>

</body>
</html>