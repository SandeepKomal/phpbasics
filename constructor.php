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
      function __construct($acolor,$abhp,$abrand){
        $this->color= $acolor;
        $this->bhp = $abhp;
        $this->brand = $abrand;
      }




    }

    $car1 = new Car("red",1000,"ferrari");
    echo $car1->color;
    $car2 = new Car("black",1500,"mercedes");
    echo $car2->brand;

    ?>
