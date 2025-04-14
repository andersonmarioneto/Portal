<?php
    require_once "../Model/produtoModel.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>

    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../public/css/signin.css" rel="stylesheet">
    <!-- Biblioteca de icones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="../Controller/produtoController.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">Portal</h1>
            <p class="mt-1 mb-3 text-muted">Editar produto</p>

            <?php  
                $produtos = Produto::Edit($_GET['id']);
            ?>
            <input type="hidden" name="id" value="<?php echo $produtos["id"]; ?>">
            <input type="hidden" name="pegar" value="edit">
            
            <div class="form-floating">
                <input class="form-control" type="text" id="nome" name="name" value="<?php echo $produtos["nome"]; ?>" required>
                <label for="nome">Nome</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="number" id="preco" name="price"  value="<?php echo $produtos["preco"]; ?>">
                <label for="preco">Preço</label>
            </div>

            <div class="form-floating">
                <input class="form-control" type="text" id="desc" name="desc" value="<?php echo $produtos["descricao"]; ?>">
                <label for="desc">Desscrição</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <!--Anderson-->
                </label>
            </div>

            <a href="listarProduto.php" class="w-10 btn btn-lg btn-primary"><i class="bi bi-arrow-return-left"></i></a>
            <button class="w-99 btn btn-lg btn-warning"  type="submit">Atualizar</button>
        </form>
    </main>
</body>
</html>