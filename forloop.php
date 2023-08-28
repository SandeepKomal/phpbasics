<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="forloop.php" method="post">
       Enter your Name:<input type="text" name="name">
        <!-- Enter your Age :<input type="number" name="age"> -->
       <input type="submit">
    </form>


    <?php

    $name = $_POST["name"];
    for($num=0;$num<=5;$num++){
      echo "$name <br>";



    }








     ?>











  </body>


</html>
