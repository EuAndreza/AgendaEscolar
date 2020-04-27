<?php
require_once 'Conexao.php';

class UsuarioProf{

	public $idProf;
	public $nomeProf;
	public $loginProf;
	public $senhaProf;

public function carregarProf($loginProf){
	$queryProf = "select * from professor where login_prof = '$this->login'";
	$conexaoProf = Conexao::criar();
	$usuarioProf = $conexaoProf->query($queryProf)->fetch();

	if($usuarioProf){
		$this->id = $usuarioProf['id_prof'];
		$this->nome = $usuarioProf['nome_prof'];
		$this->login = $usuarioProf['login_prof'];
		$this->senha = $usuarioProf['senha_prof'];
		return true;
	}else{
		return false;
	}
}
public function senhaCorretaProf($senhaProf){
	return md5($senhaProf) == $this->senha;
}
}

class UsuarioAlu{

	public $idAlu;
	public $nomeAlu;
	public $loginAlu;
	public $senhaAlu;

public function carregarAlu($loginAlu){
	$queryAlu = "select * from alu_user where login = '$this->login'";
	$conexaoAlu = Conexao::criar();
	$usuarioAlu = $conexaoAlu->query($queryAlu)->fetch();

	if($usuarioAlu){
		$this->id = $usuarioAlu['id'];
		$this->nome = $usuarioAlu['nome'];
		$this->login = $usuarioAlu['login'];
		$this->senha = $usuarioAlu['senha'];
		return true;
	}else{
		return false;
	}
}
public function senhaCorretaAlu($senhaAlu){
	return md5($senhaAlu) == $this->senha;
}
}

class UsuarioADM{

	public $idADM;
	public $nomeADM;
	public $loginADM;
	public $senhaADM;

public function carregarADM($loginADM){
	$queryADM = "select * from administrador where login_adm = '$this->login'";
	$conexaoADM = Conexao::criar();
	$usuarioADM = $conexaoADM->query($queryADM)->fetch();

	if($usuarioADM){
		$this->id = $usuarioADM['id_adm'];
		$this->nome = $usuarioADM['nome_adm'];
		$this->login = $usuarioADM['login_adm'];
		$this->senha = $usuarioADM['senha_adm'];
		return true;
	}else{
		return false;
	}
}
public function senhaCorretaADM($senhaADM){
	return md5($senhaADM) == $this->senha;
}
}
?>