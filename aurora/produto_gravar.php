<?php

	//Criando a conexão com o banco de dados
	session_start();
	$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
	$con->exec("set name utf8");
	
	//criando a string de inserção de dados
	
	//primeiro recebo as variáveis vindas do formulário
	
	$id_fornecedor=$_POST['txtfornecedor'];
	$descricao=$_POST['txtdescricao'];
	$quantidade=$_POST['txtquantidade'];
	$validade=$_POST['txtvalidade'];
	$preco_tabela=$_POST['txtpreco'];
	
	
	$str="INSERT into produtos (idfornecedor,descricao,quantidade,validade,preco_tabela) VALUES (:id_fornecedor,:descricao,:quantidade,:validade,:preco_tabela)";
	
	$insere=$con->prepare($str);
	
	$insere->bindParam(':id_fornecedor',$id_fornecedor);
	
	$insere->bindParam(':descricao',$descricao);
	
	$insere->bindParam(':quantidade',$quantidade);
	
	$insere->bindParam(':validade',$validade);
	
	$insere->bindParam(':preco_tabela',$preco_tabela);
	
	
	$insere->execute();
	$_SESSION['quantidade_atual']=$quantidade;
	echo "<script>
	alert ('Registro Salvo');
	</script>";
	header("location:produtos.php");







?>