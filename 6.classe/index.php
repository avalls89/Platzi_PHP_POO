<?php

include './classe/Administrador.php';
// include './classe/Person.php';
include './classe/Usuari.php';



$user = new Usuari;
$user->type = new Administrador;
echo $user->type->greet();
