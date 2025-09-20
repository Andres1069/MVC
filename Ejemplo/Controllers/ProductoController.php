<?php

class ProductoController{
    public function mostrarTodos(){
        require_once 'Models/ProductoModel.php';
        
        $producto = new Producto();

        $todos_los_productos = $producto->conseguirTodos();

        require_once 'Views/Productos/mostrar-todos.php';

    }

    public function crear(){
        require_once 'Models/UsuarioModel.php';

        $practicanteDeBodega = new Usuario();
        
        $practicanteDeBodega->setId_usuario('null');
        $practicanteDeBodega->setNombre('Juan Sebastian');
        $practicanteDeBodega->setApellidos('Nieto');
        $practicanteDeBodega->setEmail('jnieto@gmail.com');
        $practicanteDeBodega->setPassword('abc2123');

        $guardar = $practicanteDeBodega->crear();

        require_once 'Views/Productos/crear.php';
    }
    
}