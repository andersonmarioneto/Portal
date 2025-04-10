<?php
    require_once "../Model/produtoModel.php";

    $conexao = Connection::getConn();

    $query = "SELECT * FROM produto";
    $execute = $conexao->prepare($query);
    $execute->execute();
            
    $produtos = $execute->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($produtos);

    //while ($produtos = $execute->fetchAll(PDO::FETCH_OBJ)) {
        
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal</title>
 
    <link href="../../public/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../public/css/signin.css" rel="stylesheet">
</head>
<body>
<div class="container m-4">


    
        <h1 class="h3 mb-3 fw-normal">Produtos</h1>
        <p class="mt-1 mb-3 text-muted">Consulta de produto</p>

            <table class="table table-striped table-hover">
                <thead> 
                    <th>
                    
                        <th>#Cod</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Desscrição</th>
                        <th></th> 
                        <th></th>
                        
                    </th>
                </thead>
                <tbody>
                        <?php  foreach ($produtos as $produto): ?>
                        <tr>
                            <td></td>
                            <td>#<?php echo $produto["id"]; ?></td>
                            <td><?php echo $produto["nome"]; ?></td>
                            <td><?php echo $produto["preco"]; ?> kz</td>
                            <td><?php echo $produto["descricao"]; ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $produto["id"]; ?>" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            
                            <td>
                                <form action="../Controller/produtoController.php" method="POST">
                                    <input type="hidden" name="pegar" value="delete">
                                    <input type="hidden" name="id" value="<?php echo $produto["id"]; ?>">
                                    <button class="btn btn-sm btn-danger">Delit</button>
                                </form>
                            </td>
                        </tr>

                        <?php endforeach ?>
                </tbody>
            </table>

            <a href="cadastro.php" class="w-10 btn btn-lg btn-primary">Cadastar</a>
    

    </div>
</body>
</html>