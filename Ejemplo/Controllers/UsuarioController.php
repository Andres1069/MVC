<?php

//Aca mostramos las acciones que puede hacer el cntrolador

class UsuarioController{
    public function mostrarTodos(){
        require_once 'Models/UsuarioModel.php';

        $usuario = new Usuario();

        $todos_los_usuarios = $usuario->conseguirTodos();

        require_once './Views/Usuarios/mostrar-todos.php';
    }

    public function crear(){
        require_once 'Models/UsuarioModel.php';

        $practicanteDeBodega = new Usuario();

        $practicanteDeBodega->setId_usuario('null');
        $practicanteDeBodega->setNombre('Raul Andres');
        $practicanteDeBodega->setApellidos('Gonzalez Cifuentes');
        $practicanteDeBodega->setEmail('raugonzalez@gmail.com');
        $practicanteDeBodega->setPassword('1233');

        $guardar = $practicanteDeBodega->crear();

        require_once './Views/Usuarios/crear.php';
    }
}