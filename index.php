<?php
require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//GET ONLY 1 USUARIO
$user = new Usuario();
$user->loadById(3);
//echo $user;

//GET LIST USUARIO
//$lista = Usuario::getList();
//echo json_encode($lista);

//Localizar login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario com login e senha
$usuario = new Usuario();
$usuario->login("edu","1234");

echo $usuario;

?>