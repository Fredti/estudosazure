<?php
	include('../includes/conexao.php');
	include('../classes.php');
	include('../url.php');
	include('analisar_logado.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Atividade Aberta 05 - Desenvolvimento de Aplicações Web na Nuvem</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="<?=$url?>/css/style.css" />
	<link rel="stylesheet" href="<?=$url?>/css/internas.css" />
	
	<script src="../js/jquery-1.7.2.js" ></script>
	<script src="../js/funcoes.js" ></script>
</head>
<?php header ('Content-type: text/html; charset=UTF-8'); ?>
<body>
	<header id="cabecalho">
		<a href="<?=$url?>/paginas/home.php">
			
		</a>
		<a  href="<?=$url?>/paginas/home.php">Bom dia  <?=$_SESSION['login']['nomeCompleto']?></a>! <a href="<?=$url?>/controller/logoff.php">sair</a>
	</header>

