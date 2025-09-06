<?php

class Usuario{
    public $nombre;
    public $apellidos;
    public $email;
    public $password;


    function getNombre(){
        return $this->nombre;
    }

<<<<<<< HEAD
        function getApellidos(){
=======
    function getApellidos(){
>>>>>>> 1b2eee94363f018b4a29983c991338fc1b04bf24
        return $this->apellidos;
    }

    function getEmail(){
        return $this->email;
    }
<<<<<<< HEAD

=======
    
>>>>>>> 1b2eee94363f018b4a29983c991338fc1b04bf24
    function getPassword(){
        return $this->password;
    }

    function setNombre($nombre){
<<<<<<< HEAD
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    function setEmail($email){
        $this->email = $email;
    }

    function setPassword($password){
        $this->password = $password;
    }


    //metodo que consulte la base de datos 

    public function conseguirtodos(){
        echo 'Imprimiendo todos los usuarios ...';
    }

=======
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
>>>>>>> 1b2eee94363f018b4a29983c991338fc1b04bf24
}