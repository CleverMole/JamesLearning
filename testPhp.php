<?php
    class car{
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new car("red","Honda");

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
      }



      
    $total = null;
    $price = 4.99;

    if(isset($_POST['submit'])){
        $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']):0;

        $total = $price * $quantity;
        echo("The total bill is \${$total} <br>");
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
</head>
<body>
    <form action="testPhp.php" method="POST">
        <label for="quantity">Enter Quantity: </label>
        <input type="number" name="quantity" id="quantity">
        <input type="submit" name="submit">
    </form>
</body>
</html>