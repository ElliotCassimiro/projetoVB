<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        <link rel="stylesheet" href="/projetoProdutos/css/style.css">
    </head>

<body>
    <div class="container">
        <h1>Atualizar Produtos</h1>
            <div class="buttons">
                        <a href="cadastro.php"><button>Cadastro</button></a>
                        <a href="editar.php"><button>Edição</button></a>
                        <a href="listagem.php"><button>Listagem</button></a>
            </div>

            <form action="/projetoProdutos/php/update.php" method="post">

                <label for="nome">Nome do Produto:</label><br>
                <input type="text" id="nome" name="nome"><br>

                <label for="quantidade">Quantidade:</label><br>
                <input type="number" id="quantidade" name="quantidade"><br>

                <label for="preco">Preço:</label><br>
                <input type="number" id="preco" name="preco"><br>

                <label for="descricao">Descrição:</label><br>
                <textarea id="descricao" name="descricao"></textarea><br>

                <input type="submit" value="Atualizar">
            </form>
    </div>
</body>
</html>