<?php
//conexão com o banco de dados
require_once('classes/Usuario.php');

//inicia a sessão
session_start();

$loginProf = isset($_POST['login']) ? $_POST['login']: '';
$senhaProf = isset($_POST['senha']) ? $_POST['senha'] : '';

$usuarioProf = new UsuarioProf();
$usuarioProf->login = $loginProf;
$existeUsuarioProf = $usuarioProf->carregarProf($loginProf);

if($existeUsuarioProf && $usuarioProf->senhaCorretaProf($senhaProf) ){
	$_SESSION['login'] = json_encode($usuarioProf);
	header('Location: bemprof.php');
}else{
	header('Location:professor.php');
}
?>