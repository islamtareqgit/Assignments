<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heading Function</title>
</head>
<body>


<?php

function myHeader($head, $tag = 'h1',$align = 'center', $color = '#333', $ff = 'candara'){

  echo  "<$tag style=\"text-align:$align; color:$color; font-family:$ff;\">$head</$tag>";


}

myHeader('My work', 'h1', 'center', 'red', 'sans-serif' );
myHeader('Welcome to our site', 'h2', 'right', 'blue', 'arial');
myHeader('We are developers', 'h3', 'justify', 'red','arial' );
myHeader('We are developers', 'h3', 'left', 'green', 'sans-serif');
myHeader('We are developers', 'h3', 'right', 'green', 'sans-serif');





?>


</body>
</html>