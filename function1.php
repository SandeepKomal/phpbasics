<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="function1.php" method="post">
        Enter number 1  :<input type="number" name="num">
        Enter number 2  :<input type="number" name="num2">
       <input type="submit">
    </form>
    <br>

    <?php

    function tellmax($num1,$num2){
      if($num1>$num2){
        return $num1;

      }else {
        return $num2;
      }
    }


    $number1 = $_POST["num"];
    $number2 = $_POST["num2"];
    echo tellmax("$number1","$number2");
