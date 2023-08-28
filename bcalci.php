<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="bcalci.php" method="post">
        Enter number 1  :<input type="number" step="0.001" name="num">
        Enter operator  :<input type="text" name="op">
        Enter number 2  :<input type="number" step="0.001" name="num2">
       <input type="submit">
    </form>
    <br>

    <?php




    $number1 = $_POST["num"];
    $op = $_POST["op"];
    $number2 = $_POST["num2"];

    if ($op == "+"){
     echo $number1 + $number2;
    }elseif ($op == "-"){
      echo $number1 - $number2;
    }elseif ($op == "*"){
      echo $number1 * $number2;
    }elseif ($op == "/"){
      echo $number1 / $number2;
    }else {
      echo "Inavlid operator";
    }
