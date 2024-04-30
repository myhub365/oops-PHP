<?php


class bank{


protected $cname;
protected $money;
protected $cid;


function __construct($x,$y,$z){

$this->cname=$x;
$this->money=$y;
$this->cid=$z;

}



}

class hdfc extends bank{
    function get(){
        echo "<br><br>cus name is $this->cname";
        echo "<br>cus money is $this->money";
        echo "<br>cus id is $this->cid";
        
        
        }
}

class sbi extends bank{
    function get(){
        echo "<br><br>cus name is $this->cname";
        echo "<br>cus money is $this->money";
        echo "<br>cus id is $this->cid";
        
        
        }
}


$c1=new hdfc("mayurbhai",500000,1234);
$c1->get();


$c2=new sbi("jenil",10000,23123);
$c2->get();

?>