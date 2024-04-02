
<?php
// Dados de conexão com o banco de dados
$servername = "191.252.178.93";
$username = "usrDev";
$password = "c21fd55e4b26bca0cec6ef6ab032cec7c5247d0a735b3468";
$dbname = "Zoop";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];

// Prepara e executa a query SQL
$sql = "INSERT INTO dados (nome, idade, cpf) VALUES ('$nome', '$idade', '$cpf')";
if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
