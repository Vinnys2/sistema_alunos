  
<?php

$pront = $_GET['pront'];

include('conexao2.php');

$SQL = "DELETE FROM pessoas WHERE id=$pront";
//echo SQL;

include('rodape_conexao.php');

header('location:consul_todos_alunos.php');
?>