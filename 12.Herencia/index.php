<?php

class User
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}

class Admin extends User
{
    public function getName()
    {
        return "I'm: {$this->name}";
    }
}
// Con "final" no se puede usar la herencia!
$admin = new Admin('Italo');
echo $admin->getName();
echo "<br>";
$user = new User('Italo');
echo $user->getName();
