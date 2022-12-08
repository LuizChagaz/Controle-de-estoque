<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "estoque";
$quanti = 0;

$conn = new PDO("mysql:dbname=$db; host=$host; charset=utf8", $user, $pass);
$Nome = $_POST["Nome"];
if(isset($_POST["descricao"])){
    $desc = $_POST["descricao"];
}else{
    $desc = "";
}
$data = [
    'Nome' => $Nome,
    'Quantidade' => $quanti,
    'Descricao' => $desc
];
$sql = "INSERT INTO estoque (Nome, Quantidade, Descricao) VALUES (:Nome, :Quantidade, :Descricao)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);
print_r('Foi');
?>