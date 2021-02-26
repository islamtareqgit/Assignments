<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project-2</title>
</head>
<body>

<?php
function information (string $name, int $birth_year){

   $age = date('Y')- $birth_year;

echo "<span style='color: darkmagenta;'>Hello $name You are $age years old</span><hr>";


}


information('John', 1930);

information('Karim', 1990);
information('Rahim', 2006);
information('Aditi', 2010);
information('Ruma', 2016);

?>







</body>
</html>