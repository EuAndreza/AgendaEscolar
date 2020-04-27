<?php

class Conexao{
	public static function criar(){
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=my_project','root','');
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conexao;
	}
}
?>