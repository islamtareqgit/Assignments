<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gpa & Grade</title>
</head>
<body>

<?php

function grade_gpa(string $point, int $grade){

    if ($point=='GPA 5'){

        echo "You secure GPA 5<hr>";

    }
    elseif ($point=='GPA 4'){

        echo "You secure GPA 4<hr>";

    }

    elseif ($point=='GPA 3'){

        echo "You secure GPA 3<hr>";


    }else{

        echo "FAIL GRADE";


    }
}




grade_gpa('GPA 5', '5');
grade_gpa('GPA 4', '5');
grade_gpa('GPA 3', '5');
grade_gpa('GPA 2', '5');




?>

</body>
</html>