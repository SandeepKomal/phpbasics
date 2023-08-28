<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="functions.php" method="post">
       Enter your Name :<input type="text" name="name">
        Enter your Age :<input type="number" name="age">
       <input type="submit">
    </form>
    <br>

    <?php

    function sayhi($name,$age){
      echo "Hi $name and your age is $age <br>";
    }

    $fullname= $_POST["name"];
    $fage = $_POST["age"];
    sayhi("$fullname",$fage);






     ?>











  </body>


</html>
