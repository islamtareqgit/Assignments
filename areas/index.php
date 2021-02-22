<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>area, square and circle function</title>
</head>
<body>

<?php



function area($txt, $width, $length, $radius){

    $area_squ = $length*$length;
    $area_cir = 3.1416*$radius*$radius;
    $area_rec = $width*$length;

    if ($txt == "rectangle") {

        echo "<span style='color: brown;'>The area result of rec is $area_rec<hr></span>";


    } elseif ($txt == "circle") {

        echo "<span style='color:blue;'>the result of circle is $area_cir<hr></span>";


    } elseif ($txt == "square") {

        echo "the result of square is  $area_squ<hr>";


    } else {

        echo "error";
    }
}

area('rectangle', 200, 400, 50);

area('circle', 400, 300, 70);
area('square', 500, 500, 50);



?>
</body>
</html>
