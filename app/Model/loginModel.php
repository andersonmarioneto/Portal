
<?php
    require_once "../Conexao/conexao.php";

    class Login {
        public static function Verificar() {
            $conexao = Connection::getConn();

            $query = "SELECT * FROM conta WHERE senha = :senha AND login = :login";
            $execute = $conexao->prepare($query);
            $execute->bindParam(':senha', $_POST['senha']);
            $execute->bindParam(':login', $_POST['login']);
            $execute->execute();

            $dados = $execute->fetch(PDO::FETCH_ASSOC);
            if($dados) {
                return $dados;
            } else {
                return false;
            }
        }
    }
?>