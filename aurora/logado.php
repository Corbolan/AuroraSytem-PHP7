<?php
session_start();

$usuario=$_POST['txtuser'];
$senha=$_POST['txtsenha'];

$con=new PDO('mysql:host=127.0.0.1:3306;dbname=db_inventory',"root");
$con->exec("set name utf8");
$consulta=$con->query("SELECT * FROM usuario WHERE nome='".$usuario."'AND senha='".$senha."'");

$row=$consulta->fetch(PDO::FETCH_OBJ);





if($row<> ""){
	$_SESSION["user"]=$usuario;
	
		header("location:dashboard.php");
		
}else{
		
		header("location:index.php");
	}





?>