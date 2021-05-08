<?php

	//Criando a conexão com o banco de dados
	session_start();
	$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
	$con->exec("set name utf8");
	

	$produto=$_POST['txtproduto'];
	$quant_baixa=$_POST['txtquantidade'];
	$url='baixa.php';
	
	
	$consulta=$con->query("SELECT * FROM produtos where idproduto='".$produto."'");
	$row=$consulta->fetch(PDO::FETCH_OBJ);
	
	
	if($quant_baixa=="" || $quant_baixa==0)
	{
	header("location:baixa.php");
	
	}
	
	if($row->quantidade<$quant_baixa)
	{
		
	echo "<script>
	alert ('Não há essa quantidade suficiente para dar baixa');
	</script>";
	header("location:baixa.php");
		
	}
	else{
			

	$str="UPDATE produtos SET quantidade=quantidade-:quantidade WHERE idproduto=".$produto;
	
	$atualiza=$con->prepare($str);
	
	$atualiza->bindParam(':quantidade',$quant_baixa);

	
	
	$atualiza->execute();
	
	echo "<script>
	alert ('Registro Salvo');
	</script>";
	header("location:baixa.php");
	}







?>