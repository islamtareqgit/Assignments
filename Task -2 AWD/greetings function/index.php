<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Greetings</title>
</head>
<body>

<?php

$person =[

   [
      'name'  => 'Thomas',
      'age' => 50,


   ],

    [

        'name'  => 'Tom',
        'age' => 20,




    ],

    [

        'name'  => 'Farah',
        'age' => 25,



    ],


    [

        'name'  => 'Abu',
        'age' => 40,



    ],
    [

        'name'  => 'Tarannamm',
        'age' => 50,




    ],


    [


        'name'  => 'Ruma',
        'age' => 17,



    ],



    [

        'name'  => 'Tania',
        'age' => 45,



    ]





];
foreach($person as $people){

    if ($people['age']>40){


        echo "<span style='color: darkgreen; font-size: 20px;'>Greetings to our club" .$people['name']. "<hr></span>";




    }

    elseif ($people['age']>=18 && $people['age']<=45){


        echo "You are most welcome to our club". $people['name']. "<hr>";



    }

    elseif ($people['age']<18){

        echo "<span style='color: red;font-size: 20px;'>You need to study hard". $people['name']. "<hr></span>";




    }else{

        echo "ERROR MESSAGE";

    }







}







?>

</body>
</html>