<?php 
include '../php/conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];

    if ($stmt = $conexao->prepare("UPDATE `produtos` SET `quantidade` = ?, `preco` = ?, `descricao` = ? WHERE `nome` = ?")) {
        $stmt->bind_param("ssss", $quantidade, $preco, $descricao, $nome);
        $stmt->execute();
        $stmt->close();
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $conexao->close();
}

?>


