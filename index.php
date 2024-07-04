<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bem-vindo ao Sistema de Cadastro de Funcionários</h1>
    <?php if (isset($_GET['message'])): ?>
        <p class="success-message"><?php echo $_GET['message']; ?></p>
    <?php endif; ?>
    <div class="buttons">
        <a href="create.php" class="button">Cadastro</a>
        <a href="view.php" class="button">Visualização</a>
    </div>
</body>
</html>
