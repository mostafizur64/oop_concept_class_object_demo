<?php

class Cars
{
    //properties

    public $color = '';
    public $doors = '';


    //method
    function __construct($given_color = 'green', $given_door = 4)
    {
        $this->color = $given_color;
        $this->doors = $given_door;
    }


    function forword($car_name = 'default')
    {
        return  " $this->color $car_name $this->doors doors is moving for forword <br>";
    }
    function backword($car_name = 'default')
    {
        return  " $this->color $car_name $this->doors doors is moving for forword <br>";
    }
}
$obj = new Cars('red', 5);
echo $obj->forword('bmw');
// $bmw = new Cars();
// $bmw->forword('bmw');
$toyota = new Cars('red', 10);
echo $toyota->backword('toyota');




class done
{
    public $fine = "done your work <br>";
}
$done = new done;
$done1 = new done;

echo $done->fine;
echo $done1->fine = "mostafizur rahman ";
echo "<br>";


//$this keyword use
class Greeting
{
    public $guestName;
    public function welcome()
    {
        echo "welcome " . $this->guestName . "</br>";
    }
}
//object Created for class
$guestOne = new Greeting();
$guesttwo = new Greeting();

//propertis values define
$guestOne->guestName = "Mostafizur Rahman";
$guesttwo->guestName = "Mostafizur pramanik";

//call fucntion name for show output
$guestOne->welcome();
$guesttwo->welcome();
