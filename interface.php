
<?php

interface animal{
    public function sound($name);
}


class cat implements animal{

    function sound($name){

        echo "<h1>Meow  Meow  Meow  Meow</h1>";
        echo "<h1>$name</h1>";
        echo "<img src='https://th-thumbnailer.cdn-si-edu.com/F-A6ekiYMBhxWxbIE5x9Uvd_lOY=/fit-in/1600x0/filters:focal(1061x707:1062x708)/https%3A%2F%2Ftf-cmsv2-smithsonianmag-media.s3.amazonaws.com%2Ffiler_public%2F55%2F95%2F55958815-3a8a-4032-ac7a-ff8c8ec8898a%2Fgettyimages-1067956982.jpg' height='200px' width='200px'>";
    }
}

class dog implements animal{

    function sound($name){

        echo "<h1>BHAU BHAUUU</h1>";
        echo "<h1>$name</h1>";
        echo "<img src='https://hips.hearstapps.com/hmg-prod/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg?crop=0.752xw:1.00xh;0.175xw,0&resize=1200:*' height='200px' width='200px'>";
    }
}


$a1=new cat();
$a1->sound("BILLI");

$a2=new cat();
$a2->sound("BLACKY");

$a3=new dog();
$a3->sound("JERMAN");
?>