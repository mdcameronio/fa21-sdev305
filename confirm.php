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
    echo "<h2> we appreciate your business</h2>";

    //var_dump($_GET);

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $method = $_POST['method'];
    $toppings = implode(",",$_GET['toppings']);

    echo "<h1>thank you for your order, $fname , $lname</h1>";

    echo "<h2>order summery</h2>";
    echo " <p>name: $fname ,$lname</p>";
    echo " <p>method: $method </p>";
    echo " <p>toppings: $toppings </p>";


 ?>

</body>
</html>