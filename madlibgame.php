<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>

    <form action="madlibgame.php" method="get">
      Color: <input type="text" name="color">
      Plural Noun: <input type="text" name="pluralnoun">
       Celebrity: <input type="text" name="celebrity">
       <input type="submit">
    </form>
    <br><br>

    <?php

    $color = $_GET["color"];
    $pluralnoun = $_GET["pluralnoun"];
    $celebrity = $_GET["celebrity"];

    echo "Roses are $color <br>";
    echo "$pluralnoun are blue <br>";
    echo "I love $celebrity <br>";
    ?>








  </body>


</html>
