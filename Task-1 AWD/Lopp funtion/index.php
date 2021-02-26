<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task-7</title>
</head>
<body>

<?php

$i = 1;
$i = $i+3;
for ($i = 1; $i<=200;$i = $i+3){

    if ($i%11 !=0){


        echo "continue<br>" .$i;
    }elseif ($i%11 ==0){
        echo "loop will break<br>";

    }else{

        echo "continue<br>";
    }

}





?>

</body>
</html>