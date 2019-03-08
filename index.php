<?php

require_once ("config.php");

//Carrega apenas um usuario
//$lucas = new Usuario();
//$lucas->loadbyId(3);
//echo $lucas;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista dos usuarios buscando pelo login
//$search = Usuario::search("lu");
//echo json_encode($search);

//Carrega um usuario usando login e senha(autenticação)
//$usuario = new Usuario();
//$usuario->login("lucas", "123456");
//echo $usuario;


//Criando um novo usuario
//$aluno = new Usuario("lucas","sacul");
//$aluno->insert();
//echo $aluno;


/*Alterar um usuario
$usuario = new Usuario();
$usuario->loadbyId(1);
$usuario->update("alunos","sonula");
echo $usuario;*/


$usuario = new Usuario();

$usuario->loadbyId(3);

$usuario->delete();

echo $usuario;



?>