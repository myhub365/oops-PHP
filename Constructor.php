<?php


class car{

public $name;
public $price;


function __construct($a,$b){

$this->n=$a;
$this->p=$b;

}

function get(){
echo " car name is $this->n <br>";
echo " car price is $this->p <br>";


}


}


$c1=new car("bmw",50000000);
// $c1->create("thar",100000);
$c1->get();


?>