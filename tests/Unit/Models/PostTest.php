<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostTest extends TestCase
{

    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP'; //Vamos a dar un nombre a un campo.

        $this->assertEquals('proyecto en php',$post->name); //Validamos si lo que contiene el campo realmente esta en minuscula.

    }

    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP'; //Vamos a dar un nombre a un campo.

        $this->assertEquals('proyecto-en-php',$post->slug); //Validamos si lo que contiene el campo realmente esta en foramto slug.

    }

    public function test_get_href()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';  
        
        $this->assertEquals('blog/proyecto-en-php',$post->href());//Validamos si lo que contiene el campo genera la url.
    }
}
