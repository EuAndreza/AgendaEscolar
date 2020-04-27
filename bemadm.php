<?php
require_once('classes/Usuario.php');

$id = '';
$nomeTurma ='';
$nomeProf = '';
$qtdTurma = '';

if(isset($_POST['id_prof'])){
	error_log('ID ==='.$_POST['id_prof']);
	$professor = adicionar_prof($conexao, $_POST['id_prof']);
	if($professor){
		$id = $professor['id_prof'];
		$nomeTurma = $professor['']
	}
}




?>