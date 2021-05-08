<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aurora System - Dashboard</title>
</head>

<link rel="stylesheet" href="estilo2.css"/>
<link rel='shortcut icon' type='image/x-icon' href='image/icon.ico'>

<?php
session_start();

?>




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
    	<h1>Seja Bem-Vindo 
<?php 


 echo $_SESSION["user"];
 
?></h1>
    </div>
</section>

<footer id="rodape">
	<label id="direitos">Todos Direitos Reservados</label>
</footer>
</div>
</body>
</html>
