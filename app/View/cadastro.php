<!--?php
    require_once "../Model/produtoModel.php";

    $conexao = Connection::getConn();

    $query = "SELECT * FROM produto";
    $execute = $conexao->prepare($query);
    $execute->execute();
            
    $produtos = $execute->fetchAll(PDO::FETCH_ASSOC);
    var_dump($produtos);
?-->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
    <p></p>

    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../public/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="../Controller/produtoController.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Portal</h1>
            <p class="mt-1 mb-3 text-muted">Cadastro de produto</p>

            <input type="hidden" name="pegar" value="saved">
            
            <div class="form-floating">
                <input class="form-control" type="text" id="nome" name="name" required>
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="number" id="preco" name="price">
                <label for="preco">Preço</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="text" id="desc" name="desc">
                <label for="desc">Desscrição</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <!--Anderson-->
                </label>
            </div>

            <button class="w-100 btn btn-lg btn-primary"  type="submit">Cadastrar</button>
        </form>
    </main>
</body>
</html>