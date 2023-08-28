<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="return.php" method="post">
        Enter a NUmber  :<input type="number" name="num">
       <input type="submit">
    </form>
    <br>

    <?php

    function cube($num){
      $resultcube = $num*$num*$num;
      return $resultcube;
    }


    $number = $_POST["num"];
    echo cube("$number");







     ?>











  </body>


</html>
