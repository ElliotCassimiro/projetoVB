<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" href="/projetoProdutos/css/style.css">
    </head>
    <body>
        <div class="container">
            <h1>Listagem de Produtos</h1>
                <div class="buttons">
                            <a href="cadastro.php"><button>Cadastro</button></a>
                            <a href="editar.php"><button>Edição</button></a>
                            <a href="listagem.php"><button>Listagem</button></a>
                </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Descrição</th>
                        <th>Data de Cadastro</th>
                        <th>Hora de Cadastro</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include '../php/conexao.php';
                    $result = $conexao->query("SELECT * FROM `produtos`");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['nome'] . "</td>";
                        echo "<td>" . $row['quantidade'] . "</td>";
                        echo "<td>" . $row['preco'] . "</td>";
                        echo "<td>" . $row['descricao'] . "</td>";
                        echo "<td>" . $row['data_cadastro'] . "</td>";
                        echo "<td>" . $row['hora_cadastro'] . "</td>";
                        echo "<td>";
                        echo "<form action='listagem.php' method='post'>";
                        echo "<input type='hidden' name='nome' value='" . $row['nome'] . "'>";
                        echo "<input type='submit' value='Deletar'>";
                        echo "</form>";
                        echo "</td>";

                        echo "</tr>";
                    }

                    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
                        $nome = $_POST["nome"];

                        echo "Nome do produto: " . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8');
                    
                        if ($stmt = $conexao->prepare("DELETE FROM `produtos` WHERE `nome` = ?")) {
                            $stmt->bind_param("s", $nome);
                            $stmt->execute();
                            $stmt->close();
                            echo "Produto deletado com sucesso!";
                        } else {
                            echo "Erro: " . $stmt->error;
                        }
                    
                        $conexao->close();
                        // Redireciona o usuário de volta para a página da lista de produtos
                        header("Location: listagem.php");
                        exit;
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>