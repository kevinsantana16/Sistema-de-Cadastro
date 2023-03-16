<?php 
include_once("conexao.php");
$name = $_POST['name'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "INSERT INTO usuarios (name,email,profissao) VALUES ('$name','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

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
    
    <h1 class=H1>Confirmação De Cadastro</h1>
	 <?php
		if ($linhas == 1){
	       print "cadastro efetuado";
	       }
	   
	    else {
	       print "Cadastro NÃO efetuado. <br> já existe um usuario com esse e-mail";}
	 
	 ?>
	</section>
	
</body>

</html>
