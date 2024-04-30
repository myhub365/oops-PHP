<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
    <form method="post">
        <span>Student Name</span>
        <input type="text" class="form-control" name="sn">
        <span>Maths</span>
        <input type="number"class="form-control" name="maths">
        <span>Science</span>
        <input type="number"class="form-control" name="science">
        <span>English</span>
        <input type="number"class="form-control" name="english">

        <button class="btn btn-info" name="submit">Submit</button>
    </form>
    </div>
    <div class="col-md-4"></div>

    </div>
    </div>
</body>
</html>




<?php



if(isset($_POST['submit']))
{
    $sn=$_POST['sn'];
    $maths=$_POST['maths'];
    $science=$_POST['science'];
    $english=$_POST['english'];


class marksheet{
    public $name;
    public $maths;
    public $science;
    public $english;


    function __construct($a,$b,$c,$d){
        $this->name=$a;
        $this->maths=$b;
        $this->science=$c;
        $this->english=$d;
    }


    function get(){
        echo "Student name is:$this->name<br>";
        echo "Maths marks is:$this->maths<br>";
        echo "Science marks is:$this->science<br>";
        echo "English marks is:$this->english<br>";
    }
}


$m1=new marksheet($sn,$maths,$science,$english);
$m1->get();



$total=$maths+$science+$english;
echo "Total marks is:$total<br>";


$pr=$total/3;
echo "Percentage is:$pr<br>";

if($maths<33){
    echo "Fail";
}
else if($science<33)
{
    echo "Fail";
}
else if($english<33){
    echo "Fail";
}


else{
    echo "pass";
}



}


?>