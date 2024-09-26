<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">Coloque seu nome: </label>
        <input type="text" name="nome1" required><br><br>
        <label for="">Coloque sua senha: </label>
        <input type="text" name="senha1" required><br><br>
        <button type="submit">Entrar</button>
    </form>
    <?php
    session_start();
    if(isset($_POST['nome1'], $_POST['senha1'])) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome1 = $_POST['nome1'];
            $senha1 = $_POST['senha1'];
            if($nome1 == $_SESSION['contas'][0]) {
                if($senha1 == $_SESSION['contas'][1]) {
                    session_destroy();
                    header("Location: boa-vinda.php");
                    exit();
                }   else {
                        echo "<br>" . "Usuário ou senha inválidos!";
                }
            } else {
                echo "<br>" . "Usuário ou senha inválidos!";
            } 
        }
    }
    ?>
</body>
</html>