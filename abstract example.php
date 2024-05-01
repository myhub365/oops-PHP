<?php

abstract class laptop{

public $name;
public $stock;

function __construct($a,$b){
$this->name =  $a;
$this->stock =  $b;

}

abstract function output();


}


class hp extends laptop{
function output(){

    echo "<h1>laptop name is - $this->name</h1>";
    echo "<h1>laptop stock is - $this->stock</h1>";
}
}
class asus extends laptop{
function output(){

    echo "<h1>laptop name is - $this->name</h1>";
    echo "<h1>laptop stock is - $this->stock</h1>";
}

}


$l1=new hp("HP GAMING",50);
$l1->output();



$l1=new asus("ASUS GAMING",100);
$l1->output();

?>