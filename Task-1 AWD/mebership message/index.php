<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment-3</title>

</head>
<body>


<?php

$user = 100;

switch ($user){

    case 500 :
        echo "<span style='color: orangered;'><h1>You are our premium member</h1></span>";
        break;

    case 1000 :
        echo "<span style='color: blue;'><h2>You are our gold member</h2></span>";
        break;

    case 1050 :
        echo "<span style='color: brown;'><h2>You are our platinum member</h2></span>";
        break;

     default :
        echo "<span style='color: darkgreen;'><h3>You need sometimes to enter our club</h3></span>";
}










?>
</body>
</html>