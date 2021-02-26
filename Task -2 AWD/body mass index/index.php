<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI</title>
</head>
<body>

<?php

function bmi($mass, $h){

$height = $h*0.3048;

$BMI = $mass/($height*$height);

echo "Body mass index = $BMI<hr>";
}


bmi(180, 5.6);
bmi(180, 4.6);


?>



</body>
</html>