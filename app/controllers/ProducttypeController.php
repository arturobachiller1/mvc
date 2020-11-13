<?php
namespace App\Controllers;

require_once('../app/models/ProductType.php');
use \App\Models\ProductType;

class ProducttypeController  
{
    public function __construct()
    {
        // echo "en UserController<br>";
    }

    public function index()
    {
        // echo "En método index<br>";

        //buscar la lista de usuarios
        $producttypes = ProductType::all(); //arriba pongo use ...
        // $users = \App\Models\User::all();
        // echo "<pre>";
        // print_r($users);
        //generar la vista
        include('../views/Producttypes/index.php');
    }
    
    public function show($arguments)
    {
        $id = $arguments[0];
        echo "Mostrar el usuario $id";        
        $producttype = ProductType::find($id);
        //generar la vista
        include('../views/Producttypes/show.php');
    }
    
    public function delete($arguments)
    {
        $id = $arguments[0];
        $producttype = ProductType::find($id);
        $producttype->delete();
        header('Location: /Producttype/index');
        echo "Borrar el usuario $id";        
    }

    public function create(){
        include('../views/Producttypes/create.php');
    }
    public function store(){
        //crear objeto
        $producttype = new ProductType;
        $producttype->name = $_POST['name'];
        $producttype->insert();
        //redirigir a la pagina principal 
        header('Location: /Producttype/index');
    }

    public function edit($arguments){
        $id = $arguments[0];
        $producttype = Producttype::find($id);

        include('../views/Producttypes/edit.php');
        
    }


    public function update($arguments){
        $id = $arguments[0];

        //crear objeto
        $producttype = Producttype::find($id);

        $producttype->name = $_POST['name'];
        $producttype->save();
        //redirigir a la pagina principal 
        header('Location: /Producttype/index');
    }
}