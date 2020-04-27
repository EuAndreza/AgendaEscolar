<?php
//conexão com o banco de dados
require_once('classes/Usuario.php');

//inicia a sessão
session_start();

$loginADM = isset($_POST['login']) ? $_POST['login']: '';
$senhaADM = isset($_POST['senha']) ? $_POST['senha'] : '';

$usuarioADM = new UsuarioADM();
$usuarioADM->login = $loginADM;
$existeUsuarioADM = $usuarioADM->carregarADM($loginADM);

if($existeUsuarioADM && $usuarioADM->senhaCorretaADM($senhaADM) ){
	$_SESSION['login'] = json_encode($usuarioADM);
	header('Location: bemadm.php');
}else{
	header('Location:adm.php');
}
?>