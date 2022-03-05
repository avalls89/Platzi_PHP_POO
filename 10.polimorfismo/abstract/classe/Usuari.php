<?php

class User extends Base_polimorfismo
{
    public function __construct($name)
    {
        $this->name = $name;
    }
}