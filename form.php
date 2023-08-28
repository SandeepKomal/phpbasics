<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="form.php" method="get">
       <input type="text" name="name">
       <input type="number" name="age">
       <input type="submit">
    </form>
    <br>

    <?php echo $_GET["name"] ?>
    <br>
    <?php echo $_GET["age"] ?>











  </body>


</html>
