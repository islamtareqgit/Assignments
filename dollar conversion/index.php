<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>currency converter function</title>
</head>
<body>

<?php

function taka(int$currency, string $country, $color){

    if($country =='USA'){

        $money = $currency*84.33;

            echo "<h1 style='color: $color;'>you will have taka $money<hr></h1> ";




    }elseif ($country =='Canada'){


        $money = $currency*66;

        echo "<h2 style='color: $color;'>You will have taka $money<hr></h2>";


    }elseif ($country =='UK'){


        $money = $currency*121;

        echo "You will have taka $money<hr>";


    }else{

        echo "You will have undefined money<hr>";
    }


}



taka(100, 'USA', 'green');
taka(1000, 'Canada', 'blue');
taka(500, 'UK', 'blue');
taka(1000, 'bul', '');






?>

</body>
</html>