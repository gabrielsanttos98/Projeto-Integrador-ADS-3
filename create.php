<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $registration_number = $_POST['registration_number'];
    $cpf = $_POST['cpf'];

    $sql = "INSERT INTO employees (full_name, registration_number, cpf) VALUES ('$full_name', '$registration_number', '$cpf')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?message=Cadastro realizado com sucesso");
        exit();
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Funcionário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Adicionar Funcionário</h1>
    <form action="create.php" method="post">
        <label for="full_name">Nome Completo:</label>
        <input type="text" name="full_name" id="full_name" required>
        <label for="registration_number">N° de Registro:</label>
        <input type="text" name="registration_number" id="registration_number" required>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
        <input type="submit" value="Adicionar">
    </form>
</body>
</html>
