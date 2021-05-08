<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
</head>
<link rel="stylesheet" href="estilo.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image/icon.ico'>
<body>
<div id="container">
<nav id="menu-sup">
<?php 

session_start();
$_SESSION['nome']="aluiz";

$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
$con->exec("set name utf8");


$login = $_POST['txtuser'];
$senha = $_POST['txtsenha'];



$consulta=$con->query("SELECT * FROM usuario WHERE nome='".$login."'and senha='".$senha."'");

 
		
		while($row=$consulta->fetch(PDO::FETCH_OBJ)){
		
			echo $row->nome;
			if(return 1){
				header("Location:dashboard.php");
			}
			}
		

//if( $row > 0) {header('location:dashboard.php');}else{	header('location:index.php');	}
?>
</nav>

<section id="cabecalho">


  
    
    <div id="logotipo">
        <img  src="image/logo.fw.png" width="212"/><br />
        <br /><br /><br />
   
    </div>
  <address id="contato">
    	E-mail:tecnicogermanocorebolan@gmail.com<br />
       	Contato: 24 99873 6076
	</address> 
	


</section>
<section id="corpo">
    <div class="login">
    	<h1>Carregando...</h1>
		
    </div>
</section>
<footer id="rodape">
	<label id="direitos">Todos Direitos Reservados</label>
</footer>
</div>

</body>
</html>
