<?php 

session_start();

$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
$con->exec("set name utf8");


$login = $_POST['txtuser'];
$senha = $_POST['txtsenha'];
$_SESSION['nome']="Aluiz";


$consulta=$con->query("SELECT * FROM usuario WHERE nome='".$login."'and senha='".$senha."'");

 
		
		while($row=$consulta->fetch(PDO::FETCH_OBJ)){
		
			echo $row->nome;
			if(return 1){
				header("Location:dashboard.php");
			}
			}
		

//if( $row > 0) {header('location:dashboard.php');}else{	header('location:index.php');	}
?>