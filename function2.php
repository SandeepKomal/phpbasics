<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="function2.php" method="post">
        Enter number 1  :<input type="number" name="num">
        Enter number 2  :<input type="number" name="num2">
        Enter number 3  :<input type="number" name="num3">
       <input type="submit">
    </form>
    <br>

    <?php

    function tellmax($num1,$num2,$num3){
      if($num1>$num2 && $num1>$num3) {
        return $num1;

      }elseif($num2>$num3 && $num2>$num1) {
        return $num2;
      }else {
        return $num3;
      }
    }


    $number1 = $_POST["num"];
    $number2 = $_POST["num2"];
    $number3 = $_POST["num3"];
    echo tellmax("$number1","$number2","$number3");
