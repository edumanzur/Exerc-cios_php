<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tema'])) {
    $_SESSION['tema'] = $_POST['tema'];
}
$temaSelecionado = isset($_SESSION['tema']) ? $_SESSION['tema'] : 'claro';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecione o Tema</title>
    <link rel="stylesheet" href="tema.php">
</head>
<body>
    <h1>Escolha um Tema</h1>
    <form method="post">
        <select name="tema">
            <option value="claro" <?php echo $temaSelecionado == 'claro' ? 'selected' : ''; ?>>Claro</option>
            <option value="escuro" <?php echo $temaSelecionado == 'escuro' ? 'selected' : ''; ?>>Escuro</option>
            <option value="azul" <?php echo $temaSelecionado == 'azul' ? 'selected' : ''; ?>>Azul</option>
        </select>
        <button type="submit">Aplicar</button>
    </form>

    <p>O tema selecionado é: <strong><?php echo ucfirst($temaSelecionado); ?></strong></p>
</body>
</html>
