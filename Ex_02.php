<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">Número 1:</label>
        <input type="text" id="num1" name="num1" required><br><br>
        <button type="submit" value="enviar">Confimar</button><br><br>
    </form>
    <?php
        $num1 = $_POST["num1"] ?? $num1 = 0;
        $result = 1;
        for($i = $num1; $i >= 1; $i--) {
            $result *= $i;
        }
        echo $result;
    ?>
</body>
</html>