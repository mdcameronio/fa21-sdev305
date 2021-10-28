<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>poppa pizza</title>
</head>
<body>
<div class="jumbotron">
    <h1 class="display-4">poppas pizza </h1>
    <p class="lead">Best pizza at GRCC</p>
    <hr class="my-4">
    <p>free delivery on orders over $25.00</p>
    <!--<a class="btn btn-primary btn-lg" href="#" role="button">order now</a>-->
</div>





<?php
  //turn on err reporting
//ini_set('display_errors',1);
   // error_reporting(E_ALL);



        echo "<pre>";
    echo "<h2>we appreciate your business</h2>";

        define("TAX_RATE",0.065);
        define("TOPPINGS_PRICE", 0.50);
    //var_dump($_GET);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $method = $_POST['method'];
    $address = nl2br($_POST['address']);

    $toppings = "";
    $numToppings = 0;

    if(!empty($_POST['toppings']))
    {
        $toppings = implode(",",$_POST['toppings']);
        $numToppings = sizeof($_POST['toppings']);
    }

    $size = $_POST['size'];



    /*
     * calc price of pizza
     * base price:
     * small 10.00
     * medium 15.00
     * large 20.00
     * toppings .50 each
     * sales tax 0.065
     *
     * */
        if($size =="small"){
            $price = 10.00;
        }elseif ($size == "medium" ){
            $price = 15.00;
        }else {
            $price = 20.00;
        }

        //add cost of toppings
        $price += $numToppings * TOPPINGS_PRICE;


        // add sales tax
        $price += $price *  TAX_RATE ;
        $price = number_format($price,2);


    echo "<h1>thank you for your order, $fname , $lname</h1>";

    echo "<h2>order summery</h2>";
    echo " <p>name: $fname ,$lname</p>";
    echo " <p>method: $method </p>";
    echo " <p>toppings: $toppings </p>";
    echo "<p> total price : $$price</p>";

 ?>

</body>
</html>