<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "cadastro";

$conn = new PDO("mysql:dbname=$db; host=$host; charset=utf8", $user, $pass);
$Nome = $_POST["Nome"];
$Rua = $_POST["Rua"];
$Nome_do_Pai = $_POST["Nome_do_Pai"];
$Nome_da_Mae = $_POST["Nome_da_Mae"];
$data = [
    'Nome' => $Nome,
    'Rua' => $Rua,
    'Nome_do_Pai' => $Nome_do_Pai,
    'Nome_da_Mae' => $Nome_da_Mae,
];
$sql = "INSERT INTO pessoa (Nome, Rua, Nome_do_Pai, Nome_da_Mae) VALUES (:Nome, :Rua, :Nome_do_Pai, :Nome_da_Mae)";
$stmt= $conn->prepare($sql);
$stmt->execute($data);
echo $conn->errorInfo();
?>