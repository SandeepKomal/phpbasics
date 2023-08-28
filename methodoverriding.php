<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>




    <?php
    class chef1 { #creating a class ( a blue print to create multiple objects
      function makechicken(){
        echo "I cook chicken";


      }
      function makesalad(){
        echo "I cook salad";
      }

      function makechinese(){
        echo "I cook chiniese";
      }

      function myspecialdish(){
        echo "My special dish is pizza";
      }



    }

    class chef2 extends chef1 {
      function makepasta(){
        echo "i cook pasta";
      }
      function myspecialdish(){
        echo "My special dish is lamb ribs";
      }
    }



    $chef1 = new chef1();
    // $chef1->makechicken();
    $chef1->myspecialdish();

    $chef2 = new chef2();
    // $chef2->makechicken();
    $chef2->myspecialdish();








    ?>
