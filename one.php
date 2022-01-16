<?php
function greading()
{
    echo 'welcome to oop concept demo practices';
}
greading();
echo '<br>';


class Cars
{   //method
    function forword($car_name = 'default')
    {
        echo "$car_name moveing to forword <br>";
    }
    function backword($car_name = 'default')
    {
        return "$car_name moveing to backword <br>";
    }
}
$obj = new Cars();

$obj1 = new Cars();

$backword = new Cars();

$obj->forword('BMW');
$obj->forword();

$obj1->forword();
$obj1->forword();

echo $backword->backword();

$toyota = new Cars;
echo $toyota->backword('toyota');

$honda = new Cars();
echo $honda->backword();






// class done
// {
//     public $fine = "done your work <br>";
// }
// $done = new done;
// $done1 = new done;

// echo $done->fine;
// echo $done1->fine = "mostafizur rahman ";
// echo "<br>";


// //$this keyword use
// class Greeting
// {
//     public $guestName;
//     public function welcome()
//     {
//         echo "welcome " . $this->guestName . "</br>";
//     }
// }
// //object Created for class
// $guestOne = new Greeting();
// $guesttwo = new Greeting();

// //propertis values define
// $guestOne->guestName = "Mostafizur Rahman";
// $guesttwo->guestName = "Mostafizur pramanik";

// //call fucntion name for show output
// $guestOne->welcome();
// $guesttwo->welcome();
