<?php

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;


    function getNombre(){
        return $this->nombre;
    }

    function getApellidos(){
        return $this->apellidos;
    }

    function getEmail(){
        return $this->email;
    }
    
    function getPassword(){
        return $this->password;
    }

    function setNombre($nombre){
        return $this->nombre;
    }

    function setApellidos($apellidos){
        return $this->apellidos;
    }

    function setEmail($email){
        return $this->email;
    }
    
    function setPassword($password){
        return $this->password;
    }
}