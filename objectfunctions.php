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

      function win(){
        if($this->bhp <1200){
          echo "you are not a winner $this->brand";

        }else{
          echo "you are a winner $this->brand";
        }
      }




    }

    $car1 = new Car("red",1000,"ferrari");
    // echo $car1->color;
    $car2 = new Car("black",1500,"mercedes");
    // echo $car2->brand;

    echo $car1->win();
    echo $car2->win();

    ?>
