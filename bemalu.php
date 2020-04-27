<?php  

session_start();
if (!isset($_SESSION['login']))
header('Location:aluno.php');

$usuario = json_decode($_SESSION['login']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Aluno</title>
</head>
<body>
<h1>Bem vindo <?=$usuario->nome?></h1>
<a href="sairAlu.php">Sair</a>
</body>
</html>