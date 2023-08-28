<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="switch.php" method="post">
       Enter your Grade :<input type="text" name="grade">
        <!-- Enter your Age :<input type="number" name="age"> -->
       <input type="submit">
    </form>
    <br>

    <?php

    $grade = $_POST['grade'];

    switch($grade){

      case "A+":
       echo "You DID amazing";
       break;

      case "A":
       echo "you did well";
       break;


      case "B":
       echo "you could do better";
       break;

       case "C":
        echo "you did poorly";
        break;

       case "D":
        echo "very bad";
        break;
       case "F":
        echo "you Fail";
        break;

       default:
        echo "enter correct grade";


    }






     ?>











  </body>


</html>
