<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Produtos</title>
        <link rel="stylesheet" href="/projetoProdutos/css/style.css">
    </head>
    <body>
        <div class="container">
        
            <h1>Cadastro de Produtos</h1><br>
                <div class="buttons">
                    <a href="cadastro.php"><button>Cadastro</button></a>
                    <a href="editar.php"><button>Edição</button></a>
                    <a href="listagem.php"><button>Listagem</button></a>
                </div>

            <form action="/projetoProdutos/php/insert.php" method="POST">                        

                <label for="nome">Nome do Produto:</label><br>
                <input type="text" id="nome" name="nome" required><br>
                
                <label for="quantidade">Quantidade:</label><br>
                <input type="number" id="quantidade" name="quantidade" required><br>
                
                <label for="preco">Preço:</label><br>
                <input type="number" id="preco" name="preco" required><br>
                
                <label for="descricao">Descrição:</label><br>
                <textarea id="descricao" name="descricao" required></textarea><br>                
                
                <label for="Data do Cadastro">Data do Cadastro:</label><br>
                <input type="date" id="dataCadastro" name="dataCadastro" required><br>
                
                <label for="Hora do Cadastro">Hora do Cadastro:</label><br>
                <input type="time" id="horaCadastro" name="horaCadastro" required>
                
                <br><br>
                <input type="submit" value="Enviar">
                <br><br>

            </form> 

        </div>


        <script src="/js/script.js"></script>
    </body>
</html>