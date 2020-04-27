<?php
//conexão com o banco de dados
require_once('classes/Usuario.php');

//inicia a sessão
session_start();

$loginAlu = isset($_POST['login']) ? $_POST['login']: '';
$senhaAlu = isset($_POST['senha']) ? $_POST['senha'] : '';

$usuarioAlu = new UsuarioAlu();
$usuarioAlu->login = $loginAlu;
$existeUsuarioAlu = $usuarioAlu->carregarAlu($loginAlu);

if($existeUsuarioAlu && $usuarioAlu->senhaCorretaAlu($senhaAlu) ){
	$_SESSION['login'] = json_encode($usuarioAlu);
	header('Location: bemalu.php');
}else{
	header('Location:aluno.php');
}
?>