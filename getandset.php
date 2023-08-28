<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>  </title>
  </head>

  <body>




    <?php
    class Movie { #creating a class ( a blue print to create multiple objects)
      public $name;
      private $rating;

      function __construct($name,$rating){
        $this->name= $name;
        $this->setrating($rating);

      }



      function getrating(){
        return $this->rating;
      }

      function setrating($rating){
        if ($rating == "R" || $rating == "NR" || $rating == "PG" || $rating == "G" || $rating == "PG-13"){
          return $this->rating = $rating;

        } else {
          return $this->rating = "NR";

        }


      }




    }

    $movie1 = new Movie("wolf of wall street","R");
      $movie1->setrating("R");

    echo $movie1->getrating();



    ?>
