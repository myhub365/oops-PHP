<?php


class car{

public $name;
public $price;


function __construct($a,$b){

$this->n=$a;
$this->p=$b;

}

function __destruct(){
echo " car name is $this->n <br>";
echo " car price is $this->p <br><br><br> ";


}


}


$c1=new car("bmw",50000000);
$c2=new car("alto 800",10000);
$c3=new car("maruti",100000);


?>