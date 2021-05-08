<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aurora System - Dashboard</title>
</head>
<link rel="stylesheet" href="estilo2.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image/icon.ico'>
<?php
$con=new PDO('mysql:host=127.0.0.1:4000;dbname=db_inventory',"root");
$con->exec("set name utf8");
$consulta=$con->query("SELECT * FROM fornecedor");

?>

<style>
#container{
	max-height:100%;
	
}
nav a{
	margin-right:1%;
}
#corpo{
	width:900;
	max-height:100%;
}

	#id_descricao{
		margin-left:11px;
		width:500px;
		margin-bottom:5px;
	}
	#id_validade{
		margin-left:0.6%;
		
		margin-bottom:5px;
	}
	#id_preco{
		margin-left:0.5%;
	}
	#sb-gravar{
		margin-top:100px;
		margin-left:950px;
		width:200px;
		height:50px;
		background-color:#0083c3;
		color:white;
		border:0px;
		border-radius:20px;
		
	}
	#sb-gravar:hover{
		background-color:#5fcbff;
		
	}
	#sb-gravar[type=submit]{
		font-weight:bold;
		
	}
	#frm_prod{
		border-left:6px solid blue;
		padding-left:20px;
		background-color:#c3c3c3;
		padding-top:10px;
		padding-bottom:20px;
		padding-right:20px;
		margin-left:200px;
		height:470px;
		
	}
	#frm_prod label{
		color:white;
	}
	.conteudo_corpo{
		width:1500px;
	}
</style>
<body>
<div id="container">
<nav id="menu-sup">
        <a href="index.php">SAIR</a>
</nav>

<section id="cabecalho">


  
    
    <div id="logotipo">
        <img  src="image/logo.fw.png" width="212" title="Aurora System" alt="Aurora System"/><br />
       
        <br /><br /><br />
   
    </div>
  <address id="contato">
    	E-mail:tecnicogermanocorebolan@gmail.com<br />
       	Contato: 24 99873 6076
	</address> 
	
    
	

</section>
<section id="id_dash" >
    <div class="dash">
    	<a href="dashboard.php"><img src="image/bt-home.png" title="Home" alt="Home"/></a><br />
    	<a href="produtos.php"><img src="image/bt-prod.png" title="Produtos" alt="Produtos"/></a><br />
    	<a href="fornecedor.php"><img src="image/for_brt.png" title="Fornecedor" alt="Fornecedor"/></a><br />
     	<a href="baixa.php"><img src="image/bt_dinheiro.png" title="Baixa de Caixa" alt="Baixa de Caixa"/></a><br />
    	<a href="relatorio.php"><img src="image/bt-rel.png" title="Relatório" alt="Relatório"/></a><br />
    </div>
</section>
<section id="corpo">
    <div class="conteudo_corpo">
    	<h1>Fornecedor</h1>
		
		<form id="frm_prod" method="post" action="fornecedor_gravar.php">
		
		<label>Nome: </label><br>
			<input type="text" name="txtnome" id="id_descricao"/><br>
			
		<label>Cnpj: </label><br>
			<input type="text" name="txtcnpj" id="id_validade"/><br>
			
		<label>Endereço: </label><br>
			<input type="text" name="txtendereco" id="id_preco"/><br><br>
			
			<table style="border:1px solid black; background-color:white; border-left: 1px solid black;border-collapse: collapse;">
			<tr style="border:1px solid black;">
				<th style="border:1px solid black;padding:10px;padding-right:70px;">ID</th>
				<th style="border:1px solid black;padding:10px;padding-right:370px;">Nome</th>
				<th style="border:1px solid black;padding:10px;padding-right:70px;">Cnpj</th>
				<th style="border:1px solid black;padding:10px;padding-right:70px;">Endereço</th>
			</tr>
			
			<?php
			
				
				while($row=$consulta->fetch(PDO::FETCH_OBJ)){
				echo"<tr>";
				echo "<td>".$row->idfornecedor."</td>";
				echo "<td>".$row->nome."</td>";
				echo "<td>".$row->cnpj."</td>";
				echo "<td>".$row->endereco."</td>";
				
				echo "</tr>";
		
				
			}
			?>
			</table><br><br>	
		
			<input type="submit" value="SALVAR" id="sb-gravar"/>
			
		</form>
		
    </div>
</section>

<footer id="rodape">
	<label id="direitos">Todos Direitos Reservados</label>
</footer>
</div>
</body>
</html>
