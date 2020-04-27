<?php
// INICIA UMA SESSÃO CASO NÃO EXISTA, SE EXISTIR ELE USA A SESSÃO QUE EXISTE NO SERVIDOR
session_start();

//REMOVE O PAREMETRO DE SESSÃO "usuario". 
//isso irá siginificar que o usuário estão deslogado
unset($_SESSION['login']);

//redireciona o cara pra a tela de login
header('Location: professor.php');

?>