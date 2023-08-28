<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="while.php" method="post">
       Enter your Grade :<input type="text" name="name">
        <!-- Enter your Age :<input type="number" name="age"> -->
       <input type="submit">
    </form>


    <?php

    $name = $_POST["name"];
    $num = 0;
    while ($num<=5){
      echo "$name <br>";
      $num++;


    }








     ?>











  </body>


</html>
