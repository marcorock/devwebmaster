<?php
use \PDO;
use \PDOException;
$host = 'mysql'; //Se o banco de dados estiver no mesmo servidor deste arquivo, use localhost
$database = 'default';
$user = 'root';
$password = 'root';
$charset = 'utf8';

try {
    //code...
    $banco = new PDO("mysql:host={$host};dbname={$database}",$user,$password);
    echo "Conexão realizada com sucesso";
} catch (PDOException $e) {
    //throw $th;
    echo $e->getMessage();
    
}