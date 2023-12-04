<?php 
// Recebe os dados do formulário
include '../php/conexao.php';
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = $_POST["nome"];
    $quantidade = $_POST["quantidade"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
// Conecta ao banco de dados e atualiza o produto
    if ($stmt = $conexao->prepare("UPDATE `produtos` SET `quantidade` = ?, `preco` = ?, `descricao` = ? WHERE `nome` = ?")) {
        $stmt->bind_param("ssss", $quantidade, $preco, $descricao, $nome);
        $stmt->execute();
        $stmt->close();
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }
// Fecha a conexão com o banco de dados
    $conexao->close();
}

?>


