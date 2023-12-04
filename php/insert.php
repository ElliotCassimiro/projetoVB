<?php
include '../php/conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome'], $_POST['quantidade'], $_POST['preco'], $_POST['descricao'], $_POST['dataCadastro'], $_POST['horaCadastro'])) {

        if ($stmt = $conexao->prepare("INSERT INTO produtos (nome, quantidade, preco, descricao, data_cadastro, hora_cadastro) VALUES (?, ?, ?, ?, ?, ?)")) {

            $nome = $_POST['nome'];
            $quantidade = $_POST['quantidade'];
            $preco = $_POST['preco'];
            $preco_formatado = 'R$ ' . number_format($preco, 2, ',', '.');
            $descricao = $_POST['descricao'];
            $data_cadastro = $_POST['dataCadastro'];
            $hora_cadastro = $_POST['horaCadastro'];

            $stmt->bind_param("sissss", $nome, $quantidade, $preco, $descricao, $data_cadastro, $hora_cadastro);

            if ($stmt->execute()) {
                echo "Dados inseridos com sucesso!";
            } else {
                echo "Erro ao executar a inserção: " . $stmt->error;
            }
            

            $stmt->close();
        } else {
            echo "Erro na preparação da declaração: " . $conexao->error;
        }
    } else {
        echo "Parâmetros de postagem ausentes.";
    }
} else {
    echo "Acesso indevido.";
}

$conexao->close();

?>