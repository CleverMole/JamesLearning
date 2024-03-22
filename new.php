<?php
    include_once('testPhp.php');

// $total = null;
// $price = 4.99;

// if(isset($_POST['submit'])){
//     $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']):0;

//     $total = $price * $quantity;
//     echo("The total bill is \${$total} <br>");
// }


    $myCar = new car("red","Honda");
    $myNewCar = new car("blue","CIvic");

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
      }

   foreach ($myNewCar as $x => $y) {
        echo "$x: $y <br>";
      }

    

?>