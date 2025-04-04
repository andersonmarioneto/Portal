<?php
    class Connection {
        public static $conn;
        public static $user = "root";
        public static $password = "";
        public static $host = "mysql:host=localhost:3306; dbname=portal";  
        //public static $host = "localhost; dbname=portal";
        
        public static function getConn(){
            try {
                if(self::$conn == null) {
                    self::$conn = new PDO(self::$host, self::$user, self::$password);
                }
                return self::$conn;
            } catch(PDOException $e) {
                echo "Falha na conexao: " . $e->getMessage();

            }
        }
    }   
?>    