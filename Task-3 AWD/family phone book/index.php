<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>family phonebook</title>
</head>
<body>

<?php

$data_1=[



   [

      'Name'          => 'Abdul',
       'Phone number' => '01778276162',
       'location'      => 'Dhanmondi'







   ],

    [


        'Name'          => 'Karim',
        'Phone number' => '01778276152',
        'location'      => 'Khilgaon',



    ],



    [

        'Name'          => 'Rahim',
        'Phone number' => '01778274132',
        'location'      => 'Rampura',


    ],
    [

        'Name'          => 'Mazid',
        'Phone number' => '01778273132',
        'location'      => 'Malibag',



    ],
    [

        'Name'          => 'Tareq',
        'Phone number' => '01778272132',
        'location'      => 'Goran',


    ]





];


foreach ($data_1 as $family){


    echo "NAME =".$family['Name']. "<br>";
    echo "Cell Number =".$family['Phone number']. "<br>";
    echo "Area =".$family['location']. "<hr>";




}








?>

</body>
</html>