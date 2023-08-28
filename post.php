<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>


    <form action="post.php" method="post">
       Username:<input type="text" name="username">
       Password:<input type="password" name="password">
       <input type="submit">
    </form>
    <br>

    <?php echo $_POST["username"] ?>
    <br>
    <?php echo $_POST["password"] ?>











  </body>


</html>
