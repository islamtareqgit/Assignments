<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Small, large and multiplehand converter functions</title>
</head>
<body>

<?php


function boroHat($txt, $change){
    echo "<span style='text-transform: uppercase;'>we are cordially $change you to our $txt</span>". "<hr>";


}
function chotoHat($txt, $abc){

    echo "<span style='text-transform: lowercase;'>we are cordially $abc you to our $txt</span>". "<hr>";

}

boroHat( 'AWD course', 'web development');
chotoHat('Development course', 'invite');


?>

<?php

function multiHat($txt, $hand = 'b'){

    if ($hand == 'b'){

        echo "<span style='text-transform: uppercase;'>$txt</span>". "<hr>";
    }
    elseif($hand=='c'){

        echo "<span style='text-transform: capitalize;'>$txt</span>". "<hr>";
    }else{

        echo "<span style='text-transform: lowercase;'>$txt</span>"."<hr>";

    }



}

multiHat ('Tarequl Islam', 'd');

multiHat ('web designer', 'd');
multiHat ('Graphic designer', 'b');



?>


</body>
</html>