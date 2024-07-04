<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM employees WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $registration_number = $_POST['registration_number'];
    $cpf = $_POST['cpf'];

    $sql = "UPDATE employees SET full_name='$full_name', registration_number='$registration_number', cpf='$cpf' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Funcionário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Funcionário</h1>
    <form action="update.php?id=<?php echo $id; ?>" method="post">
        <label for="full_name">Nome Completo:</label>
        <input type="text" name="full_name" id="full_name" value="<?php echo $row['full_name']; ?>" required>
        <label for="registration_number">N° de Registro:</label>
        <input type="text" name="registration_number" id="registration_number" value="<?php echo $row['registration_number']; ?>" required>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" value="<?php echo $row['cpf']; ?>" required>
        <input type="submit" value="Atualizar">
    </form>
</body>
</html>
