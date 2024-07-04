<?php
$host = 'localhost:3307';
$db = 'crud_employees';
$user = 'root';
$pass = '';

// Conectando ao banco de dados
$conn = new mysqli($host, $user, $pass, $db);

// Verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
