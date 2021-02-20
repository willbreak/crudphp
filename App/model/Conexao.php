<?php

namespace App\model;

// class Conexao{

//     private static $instance;

//     public static function getConn(){

//         if(!isset(self::$instance)):
//             try {
//                 self::$instance= new \PDO("mysql:host=localhost;dbname=agenda","root","");
//                 echo "conexao concluida";
//             }catch(PDOException $ex){
//                 echo "erro na conexao".$ex->getMessage();
//             }
            
//         endif;
//        return self::$instance;       
//     }
//}

class Conexao{
    private static $instancesql;
    public static function getConn(){
        if(!isset(self::$instancesql)):
            try{

                self::$instancesql= new \PDO("mysql:host=localhost;dbname=agenda","root","");
                echo "<script>console.log('conectado com o banco de dados')</script>";
            }catch(PDOException $ex){
                echo "Erro na conexao".$ex->getMessage();

            }
        endif;
        return self::$instancesql;
        }
    
}

?>