<?php
include_once("config.php"); // Inclui a conexão

$id = $_GET['id']; // Pega o ID da URL

// Executa a exclusão usando a variável de conexão correta
mysqli_query($conexao, "DELETE FROM endereco WHERE id = $id");

// Redireciona após excluir
header("Location: gestao.php");
exit;
?>
