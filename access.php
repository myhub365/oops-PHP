<?php


class imp{

private $name;
private $own;


function create($a,$b){
$this->name=$a;
$this->own=$b;

}

function get(){
    echo "name is $this->name <br>";
    echo "company own is $this->own";
}


}


$c1=new imp();

$c1->create("bill gates","microsoft");
$c1->get();



// $c2=new imp();
// $c2->name="MARK BHAI";
// echo $c2->name;

// $c2->own="<br>INSTAGRAM";
// echo $c2->own;

?>