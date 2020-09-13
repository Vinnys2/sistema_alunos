<?php
	$id = $_GET['id'];
	$nome = $_GET['nome_novo'];
	$idade = $_GET['idade_novo'];
	$endereco = $_GET['endereco_novo'];

	include('conexao2.php');
	
	$SQL = "UPDATE pessoas SET nome='$nome', idade='$idade', endereco='$endereco' WHERE id=$id";
	
	include('rodape_conexao.php');
	
	header('location:cons_todos_alunos.php');
?>