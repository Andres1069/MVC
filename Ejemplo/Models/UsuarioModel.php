<?php

require_once 'config/database.php';

class Usuario
{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;

    private $db;

    public function _contruct()
    {
        $this->db = database::conectar();
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getApellidos()
    {
        return $this->nombre;
    }

    function getEmail()
    {
        return $this->nombre;
    }

    function getPassword()
    {
        return $this->nombre;
    }

    //Set

    function setNombre($nombre)
    {
        return $this->nombre;
    }

    function setApellidos($apellidos)
    {
        return $this->apellidos;
    }

    function setEmail($email)
    {
        return $this->email;
    }

    function setPassword($password)
    {
        return $this->password;
    }

    //Metodo que consulte la BD

    public function conseguirTodos(){

        $query = $this->db->query("SELECT * ");

        echo 'Imprimiendo todos los usuarios.....';
    }
}