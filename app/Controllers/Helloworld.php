<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        // echo $this->name;
        echo $name . "<br>";
        echo $npm . "<br>";
        // echo "Hello Lita";
    }
    public function show()
    {
        echo "Lita Amelia";
        echo "1817051001";
    }
}
