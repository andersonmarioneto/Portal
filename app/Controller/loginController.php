<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pegar']) && $_POST['pegar'] === 'saved') {
    
    require_once '../Model/loginmodel.php';

    $resultado = Login::Verificar();

    if ($resultado) {
        // Armazenar os dados do utilizador na sessão
        $_SESSION['usuario'] = $resultado;

        // Redirecionar para uma página segura após login
        header("Location: ../View/dashboard.php");
        exit;
    } else {
        // Redirecionar de volta para o login com mensagem de erro
        $_SESSION['erro_login'] = "Login ou senha incorretos.";
        header("Location: ../View/login.php");
        exit;
    }

} else {
    // Acesso direto ao controller sem submissão de formulário
    header("Location: ../View/login.php");
    exit;
}
?>
