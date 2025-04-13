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

        public static function View(){
            $conexao = Connection::getConn();

            $query = "SELECT * FROM produto";
            $execute = $conexao->prepare($query);
            $execute->execute();
                    
            $produtos = $execute->fetchAll(PDO::FETCH_ASSOC);

            return $produtos;
        }

        public static function Delete($id){
            $conexao = Connection::getConn();
            
            $query = "DELETE FROM produto WHERE id = :id";
            $execute = $conexao->prepare($query);
            $execute->bindValue(':id', $id);
            
            if($execute->execute()){
                return 1;
            } else {
                return 0;
            }

        }
    }
?>