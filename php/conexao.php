<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "mydb";

// Criar conexão
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, 3306);

// Checar conexão
if ($conexao->connect_errno) {
    echo "Erro ao conectar ao banco de dados: ";
    echo $conexao->connect_error;
  die("Connection failed: " . $conexao->connect_error);
}

$sql = "select id, nome, quantidade, preco, descricao, data_cadastro, hora_cadastro from produtos";
$result = $conexao->query($sql);

if ($result->num_rows > 0)
 
  while($row = $result->fetch_assoc()) 

?>