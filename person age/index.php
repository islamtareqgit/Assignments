<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age finder</title>
</head>
<body>

<?php

function information(string $txt, int $birth_year, $current_year = 2021){

    $age = $current_year - $birth_year;
    echo "<span style='color: darkmagenta;'>Hello $txt your current age is $age</span>". "<hr>";


}

information("Tareq", 1990);

information("Farah", 1988);
information("Ruma", 1998);




?>

</body>
</html>