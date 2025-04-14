<?php
    require_once "../Model/produtoModel.php";

    //$pegar = $_GET['pegar'];

    if (isset($_POST['pegar']) && $_POST['pegar'] == "saved") {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];
        
        $return = Produto::Save($name, $price, $desc);

        if($return == 1) {
            echo "<script>alert('Produto cadastrado com sucesso!');</script>";
            header("Location: ../View/listarProduto.php");
        } else {
            echo "<script>alert('Erro ao cadastrar produto!');</script>";
        }
    }

    if (isset($_POST['pegar']) && $_POST['pegar'] == "delete") {
        $id = $_POST['id'];

        $return = Produto::Delete($id);
        
        if($return == 1) {
            echo "<script>alert('Produto excluído com sucesso!');</script>";
            header("Location: ../View/listarProduto.php");
        } else {
            echo "<script>alert('Erro ao excluir produto!');</script>";
        }
    }

    if (isset($_POST['pegar']) && $_POST['pegar'] == "edit") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $desc = $_POST['desc'];

        $return = Produto::Update($id, $name, $price, $desc);

        if($return == 1) {
            echo "<script>alert('Produto atualizado com sucesso!');</script>";
            header("Location: ../View/listarProduto.php");
        } else {
            echo "<script>alert('Erro ao atualizar produto!');</script>";
        }
    }   
    
?>