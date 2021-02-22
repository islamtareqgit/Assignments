<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment 1</title>
</head>
<body>
<?php

$bangla = 65;
$english = 75;
$math = 95;
$religion = 70;


$A_plus= 5;
$A = 4;
$A_minus = 3.5;
$B = 3;
$C = 2;
$D = 1;
$F = 0;



$gpa = 0;

//Bangla

if($bangla>=80){
    echo "You get A+ in Bangla and your grade point is $A_plus <br>";

    $bangla = $A_plus;
}
elseif ($bangla>=70){

    echo "You get A in Bangla and your grade point is $A<br>";
    $bangla = $A;

}
elseif ($bangla>=60){

    echo "You get A- in Bangla and your grade point is $A_minus <br>";
    $bangla = $A_minus;
}
elseif ($bangla>=50){
    echo "You get B in Bangla<br>";
    $bangla = $B;

}
elseif ($bangla>=40){
    echo "You get C in Bangla<br>";
    $bangla = $C;

}
elseif ($bangla>=30){
    echo "You get D in Bangla<br>";
    $bangla = $D;

}
else{
    echo "You get F in Bangla<br>";
    $bangla = $F;

}
//English
if($english>=80){
    echo "You get A+ in English<br>";
    $english= $A_plus;

}
elseif ($english>=70){

    echo "You get A in English and your grade point is $A <br>";
    $english= $A;


}

elseif ($english>=60){

    echo "You get A- in English<br>";
    $english= $A_minus;
}

elseif ($english>=50){

    echo "You get B in English<br>";
    $english= $B;
}
elseif ($english>=40){
    echo "You get C in English<br>";
    $english= $C;

}
elseif ($english>=30){

    echo "You get D in English<br>";
    $english= $D;
}
else{
    echo "You get F in English<br>";
    $english = $F;

}

if ($math>=80){

    echo "<h1>You get A+ in Math and your grade point is $A_plus </h1><br>";
    $math= $A_plus;
}
elseif ($math>=70){

    echo "You get A in Math<br>";
    $math= $A;
}
elseif ($math>=60){

    echo "You get A- in Math<br>";
    $math= $A_minus;
}
elseif ($math>=50){

    echo "You get B in Math<br>";
    $math= $B;
}
elseif ($math>=40){

    echo "You get C in Math<br>";
    $math= $C;

}
elseif ($math>=30){
    echo "You get D in Math<br>";
    $math= $D;

}
else{
    echo "You get F in Math<br>";
    $math = $F;

}


if ($religion>=80){

    echo "You get A+ in Religion<br>";
    $religion= $A_plus;
}
elseif ($religion>=70){

    echo "<h2>You get A in Religion and your grade point is $A</h2><br>";
    $religion= $A;
}
elseif ($religion>=60){
    echo "You get A- in Religion<br>";
    $religion= $A_minus;

}
elseif ($religion>=50){
    echo "You get B in Religion<br>";
    $religion= $B;

}
elseif ($religion>=40){

    echo "You get C in Religion<br>";
    $religion= $C;
}
elseif ($religion>=30){
    echo "You get D in Religion<br>";
    $religion= $D;

}
else{
    echo "You get F in Religion<br>";
    $religion = $F;

}






?>


</body>
</html>