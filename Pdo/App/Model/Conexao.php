<?php 
namespace App\Model;


class Conexao
{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost;port=3307;dbname=pdo;charset=UTF8', 'root', '28763599');
        endif;

        return self::$instance;
    }
}
?>