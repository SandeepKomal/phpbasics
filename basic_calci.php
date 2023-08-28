<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>

    <form action="basic_calci.php" method="get">
       <input type="number" name="num1">
       <input type="number" name="num2">
       <input type="submit">
    </form>
    <br>

    Answer:<?php echo $_GET["num1"] + $_GET["num2"] ?>
    <br>



  </body>


</html>
