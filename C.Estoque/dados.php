<?php 
require_once "conexão.php";
$dados = $conn->query("SELECT * FROM estoque");
$dados = $dados->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($dados);
?>