<?php

class fruit{


    public $name;
    public  $price;
    public  $color;


    function ins($a,$b,$c){

        $this -> name=$a;
        $this-> price=$b;
        $this -> color=$c;
    }

    function ans(){
echo "<h1>fruit name is $this->name <br></H1>";
echo "<h1>fruit price is $this->price <br></H1>";
echo "<h1>fruit color is $this->color <br></H1>";


    }
}


$p1= new fruit();
$p1->ins("mango",1000,"orange");
$p1->ans();



$p2= new fruit();
$p2->ins("apple",700,"red");
$p2->ans();
?>
