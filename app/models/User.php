<?php
namespace App\Models;
require_once '../core/Model.php';
use PDO;

use PDOException;
use Core\Model;
class User extends model
{
    public function __construct()
    {
        # code...
    }

    public static function all()
    {
        $db = User::db();
        $statement = $db->query('SELECT * FROM users');
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);

        return $users;        
    }

    public static function find($id)
    {
        $db = User::db();

        $statement = $db->prepare('SELECT * FROM users WHERE id=:id');
        $statement->execute(array(':id' => $id));        
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
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
    public function insert()
    {
         $db = User::db();
         $statement = $db->prepare('INSERT INTO users(name, surname, email, birthdate) VALUES(:name, :surname, :email, :birthdate)');
         $data = ([':name' => $this->name, ':surname' => $this->surname,
          ':email' => $this->email, ':birthdate' => $this->birthdate]);        
        echo"<pre>";
        var_dump($data);
         return $statement->execute($data);

    }

    public function save()
    {
         $db = User::db();
         $statement = $db->prepare('UPDATE users SET name = :name, surname = :surname, email = :email, birthdate = :birthdate where id=:id');
         $data = ([':id' => $this->id ,
         ':name' => $this->name,
          ':surname' => $this->surname,
          ':email' => $this->email,
           ':birthdate' => $this->birthdate]);        
         return $statement->execute($data);

    }

    public function delete(){

        $db = User::db();
        $statement = $db->prepare('DELETE FROM users WHERE id=:id');
        return $statement->execute([':id' => $this->id]);


    }


}
