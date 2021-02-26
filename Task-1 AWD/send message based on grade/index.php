<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$marks = 95;
$name = "Ruma";

if($name =='Farah' || $name =='Tarannam' || $name =='Aditi' || $name =='Ruma' || $name =='Afrin'){
   $rel = "Apu";

}else{
    $rel = "Vai";

}

if ($marks>=0 && $marks<=32){
    echo $name."<span style='color: red;'>$rel apni Fail korechen apanr jonno dua roilo </span>";

}
elseif ($marks>=33 && $marks<=40){
    echo $name."<span style='color: blue;'>$rel apni C grade peachen try hard to improve</span>";

}
elseif ($marks>=50 && $marks<=59){

    echo $name."<span style='color: orangered;'>$rel apni B grade peachen you are gradually improving</span>";
}
elseif ($marks>=60 && $marks<=69){

    echo $name."<span style='color: green;'>$rel apni A- grade peachen make a treat</span>";
}
elseif ($marks>=70 && $marks<=79){

    echo $name."<span style='color: black;'>$rel apni A grade peachen congrats</span>";
}
elseif ($marks>=80 && $marks<=100){

    echo $name."<span style='color: blue;'>$rel apni A+ grade peachen congrats for your biggest success</span>";
}
else{

    echo "apnarjonno shuvo kamona";
}





?>

</body>
</html>