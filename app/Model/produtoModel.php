<?php
    require_once "../Conexao/conexao.php";

    class Produto {
        public static function Save($name, $price, $desc){
            $conexao = Connection::getConn();
            
            $query = "INSERT INTO produto (nome, preco, descricao) VALUES (:name, :price, :desc)";
            $execute = $conexao->prepare($query);
            $execute->bindValue(':name', $name);
            $execute->bindValue(':price', $price);
            $execute->bindValue(':desc', $desc);
            $return = 0;
            
            if($execute->execute()){
                $return = 1;
            }
            return $return;
        }
    }
?>