<?php

class Usuarios
{
    public $type;
};

class Administrados
{
    public function greet()
    {
        return "Hola Administrador";
    }
};

$Usuarios = new Usuarios;
$user->type = new Administrados;
echo $user->type->greet();
