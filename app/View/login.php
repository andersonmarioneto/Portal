<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>

    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../public/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="../Controller/loginController.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Login</h1>

            <?php session_start(); ?>
            <?php if (isset($_SESSION['erro_login'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?= $_SESSION['erro_login']; unset($_SESSION['erro_login']); ?>
                </div>
            <?php endif; ?>


            <input type="hidden" name="pegar" value="saved">
            
            <div class="form-floating">
                <input class="form-control" type="text" id="login" name="login">
                <label for="login">Login</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="password" id="senha" name="senha">
                <label for="senha">Senha</label>
            </div>

            <div class="m-4">
                <a href="conta.php" class="btn link-secondary">
                    Criar Nova Conta
                </a>
            </div>

            <button class="w-90 btn btn-lg btn-primary"  type="submit">Entrar</button>
        </form>
    </main>
</body>
</html>