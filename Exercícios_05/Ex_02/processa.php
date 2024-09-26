<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ano_nascimento = $_POST['ano_nascimento'];

    // Calculando a idade
    $ano_atual = date('Y');
    $idade = $ano_atual - $ano_nascimento;

    // Redirecionando para a página de boas-vindas com os dados
    header("Location: boas_vindas.php?nome=" . urlencode($nome) . "&idade=" . $idade);
    exit();
} else {
    echo "Método de requisição inválido!";
}
?>
