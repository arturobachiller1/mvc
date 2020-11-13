<?php
namespace App\Models;
require_once '../core/Model.php';

use PDO;
use PDOException;

class ProductType
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = ProductType::db();
        $statement = $db->query('SELECT * FROM product_types');
        $producttypes = $statement->fetchAll(PDO::FETCH_CLASS, ProductType::class);

        return $producttypes;        
    }

    public static function find($id)
    {
        $db = ProductType::db();

        $statement = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
        $Producttype = $statement->fetch(PDO::FETCH_CLASS);
        return $Producttype;
    }

    protected static function db()
    {
        $dsn = 'mysql:dbname=mvc;host=db';
        $usuario = 'root';
        $contraseña = 'password';
        try {
            $db = new PDO($dsn, $usuario, $contraseña);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Falló la conexión: ' . $e->getMessage();
        }
        return $db;
    }

    public function insert(){

        $db = ProductType::db();
        $statement = $db->prepare('INSERT INTO product_types(name) VALUES(:name)');
        $data = ([':name' => $this->name]);        
        return $statement->execute($data);

    }

    public function save()
    {
     
         $db = ProductType::db();
         $statement = $db->prepare('UPDATE product_types SET name = :name where id=:id');
         $data = ([':id' => $this->id ,
         ':name' => $this->name]);        
         return $statement->execute($data);

    }

    public function delete(){

        $db = ProductType::db();
        $statement = $db->prepare('DELETE FROM product_types WHERE id=:id');
        return $statement->execute([':id' => $this->id]);


    }
}