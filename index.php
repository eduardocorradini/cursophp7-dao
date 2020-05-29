<?php
require_once("config.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//echo json_encode($usuarios);

//GET ONLY 1 USUARIO
//$user = new Usuario();
//$user->loadById(3);
//echo $user;

//GET LIST USUARIO
//$lista = Usuario::getList();
//echo json_encode($lista);

//Localizar login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario com login e senha
//$usuario = new Usuario();
//$usuario->login("edu","jkladjklasd90");
//echo $usuario;

//SET NEW USUARIO  WITH STORED PROCEDURE
//$aluno = new Usuario("João","Senha789");
//$aluno->setDeslogin("edu");
//$aluno->setDessenha("jkladjklas");
//$aluno->insert();
//echo $aluno;

//UPDATE LOGIN AND PASS BY ID
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update('abcde','18ajddf');
echo $usuario;

/*
 
 //$dbh = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
 //$stmt = $dbh->prepare("CALL sp_usuarios_insert(1,123)");
 $dbh = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","1234");
 $stmt = $dbh->prepare("execute sp_usuarios_insert @pdeslogin=1, @pdessenha=2");
	
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	print_r($result);
  */
?>