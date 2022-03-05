<?php

interface Search
{
    public function all();
}

class Usuario implements Search
{
    public function all()
    {
        return "Obteniendo a los Usuraios, XML <br>";
    }
} 


class Post implements Search
{
    public function all()
    {
        return "Obteniendo los POST, JSON <br>";
    }
} 

$user = new Usuario();
echo $user->all();

$post = new Post();
echo $post->all();