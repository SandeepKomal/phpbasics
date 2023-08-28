<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>

    <?php
    $charactername ="komal";
    $characterage=29;
    echo("hello world");
    echo "<h1> Komalsandeep.jpg </h1>";
    echo "<hr>";
    echo "<p> This is my website </p>";

    echo "There was man called $charactername <br><hr>";
    echo "And his age is $characterage <br><hr>";
    $charactername ="sunny";
    echo "He doesn't like to be called $charactername <br><hr>";
    echo "And he didn't like being $characterage <br><hr>";

   #datatypes

   echo $phrase= "To be or not to be <hr>";
   echo  $age = "56<hr>";
   echo $gpa = "6.7<hr>";
   echo $ismale = True;
   echo $isfemale =False;

   #working with strings

  $website = "Komalsandeep.jpg <hr><br>";
  echo $website;

  echo $website[0];

  echo strtolower($website);

  echo strtoupper($website);

  $website[0]="p";
  echo $website;


  echo str_replace ("pomalsandeep","sunny",$website );
  echo substr($website ,12,2);
  echo substr($website ,12);


  #working with numbers


  echo 44;

  echo 44.8;

  echo 5+9 ;
  echo 5-9;
  echo 5*9;
  echo 5.7*9;
  echo 5/9;
  echo 10%3;
  echo 4+5*10;
  echo (4+5)*10;


  $num = 10;
  echo $num;
  $num++;
  echo $num;
  $num--;
  echo $num;
  $num = $num +25;
  echo $num;
  $num += 25;
  $num -=40;
  $num *=40;
  $num /=40;


  echo abs(-100);
  echo sqrt(4);
  echo pow(2,4);
  echo max(2,10);
  echo min(1,2,3,5);
  echo round(3.7);
  echo ceil(3,4);


  #Getting User input \\\\

  #creating a form /////









 ?>


  </body>


</html>
