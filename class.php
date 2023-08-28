<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>




    <?php
    class Car { #creating a class ( a blue print to create multiple objects)
      var $color;
      var $bhp;
      var $brand;
    }



    $car1 = new Car; #creating object( its an instance of the class)
    $car1->color ="red";
    $car1->bhp = 1000;
    $car1->brand = "ferrari";

    echo $car1->color ;
    echo $car1->bhp ;
    echo $car1->brand ;



    $car3 = new Car; #object3
    $car3->color = "blue";
    $car3->bhp = "1600";
    $car3->brand = "redbull hrc";


    echo $car3->color ;
    echo $car3->bhp ;
    echo $car3->brand ;





    $car2 = new Car; #object2
    $car2->color = "black";
    $car2->bhp = "1500";
    $car2->brand = "mercedes";


    echo $car2->color ;
    echo $car2->bhp ;
    echo $car2->brand ;




















    ?>
