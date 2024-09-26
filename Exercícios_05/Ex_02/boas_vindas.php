<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = htmlspecialchars($_GET['nome']);
    $idade = htmlspecialchars($_GET['idade']);
} else {
    echo "Dados inválidos!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-Vindas</title>
</head>
<body>
    <h1>Bem-vindo(a), <?php echo $nome; ?>!</h1>
    <p>Você tem <?php echo $idade; ?> anos.</p>
</body>
</html>
