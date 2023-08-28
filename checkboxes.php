<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="checkboxes.php" method="post">
       Apples:<input type="checkbox" name="fruits[]" value="apples">
       Oranges:<input type="checkbox" name="fruits[]" value="Oranges">
       Strawberries:<input type="checkbox" name="fruits[]" value="Starwberries">
       <input type="submit">
    </form>
    <br>

    <?php
     $fruits = $_POST["fruits"];
     echo $fruits[0];
     echo $fruits[1];
     echo $fruits[2];



      ?>











  </body>


</html>
