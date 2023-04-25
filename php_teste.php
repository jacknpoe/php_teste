<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>Teste de PHP in-line</title>
 		<link rel="stylesheet" href="php_teste.css"/>
		<link rel="icon" type="image/png" href="php_teste.png"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<?php
			header( "Content-Type: text/html; charset=ISO-8859-1", true);
			date_default_timezone_set ("America/Sao_Paulo");

			$resultado = '';
			$valor = '';

			if( isset( $_POST[ 'testar']))
			{
				$valor = $_POST["valor"];
				// mágica
				$resultado = '';
			}
		?>
		<h1>Teste de PHP in-line<br></h1>

		<form action="php_teste.php" method="POST" style="border: 0px">
			<p>Valor: <input type="text" name="valor" style="width: 100px" value="<?php echo $valor; ?>"></p>
			<p><input type="submit" name="testar" value="Testar"></p>
		</form>

		<br><p>Resultado: <?php echo $resultado; ?></p><br><br>
		<p><a href="https://github.com/jacknpoe/php_teste">Repositório no GitHub</a></p><br><br>
		<form action="index.html" method="POST" style="border: 0px">
			<p><input type="submit" name="voltar" value="Voltar"></p>
		</form>
	</body>
</html>