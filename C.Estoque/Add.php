<?php 
require_once "conexão.php";
$result = file_get_contents('php://input');
$result = preg_replace('/[^a-z0-9]/i', '', $result);
$conta = substr($result, 0, 4);
$id = substr($result, 4);
$num = 0;
$dados = $conn->prepare("SELECT Quantidade FROM estoque WHERE Id_produto=?");
$dados->execute([$id]); 
$dados = $dados->fetchAll(PDO::FETCH_ASSOC);
foreach ($dados as $key => $value) {
    $dados = $value['Quantidade'];
}
if($conta == "meno" and $dados > 0){
    $num = intval($dados)-1;
    $sql = "UPDATE estoque SET Quantidade = :Quantidade WHERE Id_produto = :Id_produto;";
    $stmt= $conn->prepare($sql);
    $data = [
        'Quantidade' => $num,
        'Id_produto' => $id,
    ];
    $stmt->execute($data);
}elseif($conta == "mais"){
    $num = intval($dados)+1;
    $sql = "UPDATE estoque SET Quantidade = :Quantidade WHERE Id_produto = :Id_produto;";
    $stmt= $conn->prepare($sql);
    $data = [
        'Quantidade' => $num,
        'Id_produto' => $id,
    ];
    $stmt->execute($data);
}
echo $conta , intval($dados);
?>