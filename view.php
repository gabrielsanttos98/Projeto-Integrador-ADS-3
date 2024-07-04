<?php
include 'db.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lista de Funcionários</h1>
    <a href="index.php">Voltar para Home</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome Completo</th>
            <th>N° de Registro</th>
            <th>CPF</th>
            <th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['registration_number']; ?></td>
            <td><?php echo $row['cpf']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
