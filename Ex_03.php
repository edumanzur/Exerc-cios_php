<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="user" id="nome" name="nome" required><br><br>
        <label for="data">Ano de nascimento:</label>
        <input type="text" id="data" name="data" required><br><br>
        <button type="submit" value="enviar">Confimar</button><br><br>
    </form>
    <?php
        $nome = $_POST["nome"] ?? $nome;
        $ano = $_POST["data"] ?? $ano = 0;
        echo $nome . "\t" .  2024 - $ano;
    ?>
</body>
</html>