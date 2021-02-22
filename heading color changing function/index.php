<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>practise</title>
</head>
<body>




<?php

function header_new($txt, $color){

   $color_picker = '';


   switch ($color){

       case 'lal':

           $color_picker = 'red';
           break;


       case 'nil':

           $color_picker = 'blue';
           break;

       case 'sobuj':

           $color_picker = 'green';
           break;

       case 'beguni':

           $color_picker = 'purple';
           break;

       case 'holud':

           $color_picker = 'yellow';
           break;


           default;

               $color_picker = 'black';
               break;

   }



    echo "<h1 style='color:$color_picker;'>$txt</h1>";
}

header_new('Designer', 'lal');
header_new('I am developer', 'nil');
header_new('Laravel Designer', 'beguni');
header_new('Designer and Developer', 'sobuj');
header_new('Jango Developer', 'holud');
header_new('Jango Developer', '');




?>







</body>


</html>
