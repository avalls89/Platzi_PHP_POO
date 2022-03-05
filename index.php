<?php

include './classes/Admin.php';
include './classes/Person.php';
include './classes/User.php';



$user = new User;
$user->type = new Admin;
echo $user->type->greet();
