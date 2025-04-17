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
    <!-- Biblioteca de icones do bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container m-4">
        <div class="text-center mb-4">
            <a href="login.php">
                <img class="m-4" src="../../public/img/user.jpg" alt="Perfil" width="72" height="72">
            </a>
            <h1 class="h3 mb-3 fw-normal">Sistema de Gestão de Produtos</h1>
            <p class="mt-1 mb-3 text-muted">Produtos Cadastrados no Sistema</p>
        </div>

        <table class="table table-striped table-hover">
            <thead> 
                <th>
                
                    <th>Cod</th>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Desscrição</th>
                    <th></th> 
                    <th></th>
                    
                </th>
            </thead>
            <tbody>
                    <?php  
                        $produtos = Produto::View(); 
                        foreach ($produtos as $produto): 
                    ?>
                    <tr>
                        <td></td>
                        <td>#<?php echo $produto["id"]; ?></td>
                        <td><?php echo $produto["nome"]; ?></td>
                        <td><?php echo $produto["preco"]; ?> kz</td>
                        <td><?php echo $produto["descricao"]; ?></td>
                        <td>
                            <a href="editProduto.php?id=<?php echo $produto["id"]; ?>" class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                        </td>
                        
                        <td>
                            <form action="../Controller/produtoController.php" method="POST">
                                <input type="hidden" name="pegar" value="delete">
                                <input type="hidden" name="id" value="<?php echo $produto["id"]; ?>">
                                <button class="btn btn-sm btn-danger button-modal-confirm"><i class="bi bi-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    <?php 
                        endforeach; 
                    ?>
            </tbody>
        </table>

        <a href="cadastro.php" class="w-10 btn btn-lg btn-primary">Cadastar</a>

    </div>
    <script src="../../public/js/modalConfirm.js" defer></script>
</body>
</html>