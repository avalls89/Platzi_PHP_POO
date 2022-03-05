<?php

include './classe/Base_polimorfismo.php';
include './classe/Guest.php';
include './classe/User.php';
include './classe/Admin.php';

$guest = new Guest();
echo $guest->login() . "<br>";


$user = new User('Albert');
echo $user->login() . "<br>";

$admin = new Admin('Maria');
echo $admin->login() . "<br>";
