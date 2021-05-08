<?php

	//Criando a conexão com o banco de dados
	
	$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
	$con->exec("set name utf8");
	
	//criando a string de inserção de dados
	
	//primeiro recebo as variáveis vindas do formulário
	
	$nome=$_POST['txtnome'];
	$cnpj=$_POST['txtcnpj'];
	$endereco=$_POST['txtendereco'];
	
	$str="INSERT into fornecedor (nome,cnpj,endereco) VALUES (:nome,:cnpj,:endereco)";
	
	$insere=$con->prepare($str);
	
	$insere->bindParam(':nome',$nome);
	$insere->bindParam(':cnpj',$cnpj);
	$insere->bindParam(':endereco',$endereco);
	
	
	$insere->execute();
	
	echo "<script>
	alert ('Registro Salvo');
	</script>";
	header("location:fornecedor.php");







?>