<?php

include './classe/Admin.php';
// include './classe/Person.php';
include './classe/User.php';



$user = new User;
$user->type = new Admin;
echo $user->type->greet();
