<!--<?php
//conexão com o mysql
//mysql_connect('localhost', 'root', '');

//conexão com o banco de dados
//mysql_select_db('my_project');
?>-->

<?php

class Conecxao{
	public static function criar(){
		$conexao = new PDO('mysql:host=127.0.0.1;dbname=my_project', 'root', '');
		$conexao->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conexao;
	}
}