<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="Associativearray.php" method="post">
      Name: <input type="text" name="name">

       <input type="submit">
    </form>
    <br>
    <?php
    $students = array("komal"=>"B","sunny"=>"A+","sundar"=>"A");

    echo  $students [$_POST["name"]];


    ?>











  </body>


</html>
