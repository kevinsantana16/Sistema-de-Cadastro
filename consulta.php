<?php
  include_once("conexao.php");

$filtro = $_GET['filtro'];

$sql = "SELECT * FROM usuarios WHERE profissao LIKE '%$filtro%'";
$consulta = mysqli_query($conexao,$sql);
$registros = mysqli_num_rows($consulta);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>site</title>
<link rel="stylesheet" href="css/css.css" type="text/css" media="all">
</head>

<body>
		<h1 class="H1">Sistema de cadastro</h1>
		<nav id="A">
            <a class="B" href="cadastro.php">cadastro</a> <a class="B" href="consulta.php">consulta</a>
        </nav>		
	<section>
    <h1 class=H1>C.O.N.S.U.L.T.A</h1>

	<form method="GET" action="">
	
	<div class="D">
	Filtrar por Profissão: <input type="text" name="filtro" class="campo" autofocus>      <input type="submit" name="Pesquisar" class="btn">
	
	</div>	

	</form>
	 <?php

	echo "<div class='D'>registros encontrados: $registros.</div>";
	echo "<br>";

	while($exibirRegistros = mysqli_fetch_array($consulta)){

		$codigo = $exibirRegistros[0];
		$name = $exibirRegistros[2];
		$email = $exibirRegistros[1];
		$profissao = $exibirRegistros[3];

		echo "<article>";

		echo "$codigo<br>";
		echo "$name<br>";
		echo "$email<br>";
		echo "$profissao<br>";

		echo "</article>";
	}
		mysqli_close($conexao);

	?>
	</section>
	
</body>

</html>
