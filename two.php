<?php

use Cars as GlobalCars;

class Cars
{
    //method
    function __construct()
    {
        echo 'this is construct <br>';
    }


    function forword()
    {
        echo 'is moving for forword <br>';
    }
    function backword()
    {
        echo 'is moving for backword <br>';
    }
    function __destruct()
    {
        echo 'this is distruct <br>';
    }
    
}
$obj = new Cars;
$obj = new Cars;
$obj = new Cars;
$obj->backword();
$obj->backword();
