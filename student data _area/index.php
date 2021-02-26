<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studenet data informations</title>
    



</head>
<body>

<?php

$student_data =[


[

    'name'              => 'Farah',
    'age'               =>  28,
    'contact'           =>  '01778276163',
    'location'          => 'Mirpur'        
    


],

[

    'name'              => 'Tareq',
    'age'               =>  30,
    'contact'           =>  '01778274162',
    'location'          => 'Khilgaon'       





],
[

    'name'              => 'Ruma',
    'age'               =>  20,
    'contact'           =>  '01578274162',
    'location'          => 'Banani'       




],

[


    'name'              => 'Aditi',
    'age'               =>  21,
    'contact'           =>  '01378276163',
    'location'          => 'Banani'       




],
[

    'name'              => 'Farah',
    'age'               =>  28,
    'contact'           =>  '01578276163',
    'location'          => 'Mirpur'       



],

[
    'name'              => 'Jamal',
    'age'               =>  28,
    'contact'           =>  '01678276163',
    'location'          => 'Mirpur'       




],

[
    'name'              => 'Kamal',
    'age'               =>  38,
    'contact'           =>  '01578276163',
    'location'          => 'Gulshan'       


],

[

    'name'              => 'Tabira',
    'age'               =>  25,
    'contact'           =>  '01558276163',
    'location'          => 'Rampura'       



],
[

    'name'              => 'Afrin',
    'age'               =>  22,
    'contact'           =>  '01378274163',
    'location'          => 'Banani'       


],
[

    'name'              => 'Abul',
    'age'               =>  48,
    'contact'           =>  '01278276163',
    'location'          => 'Mirpur'       

],

[

    'name'              => 'Mahmud',
    'age'               =>  30,
    'contact'           =>  '01378276163',
    'location'          => 'Gulshan'       


],

[

    'name'              => 'Shuvo',
    'age'               =>  28,
    'contact'           =>  '01278276163',
    'location'          => 'Mirpur'       

],
[


    'name'              => 'Shuvro',
    'age'               =>  38,
    'contact'           =>  '01578276163',
    'location'          => 'Banani'        
],

[
    'name'              => 'Hasan',
    'age'               =>  20,
    'contact'           =>  '01278276163',
    'location'          => 'Mirpur'       



],
[
    'name'              => 'Abu',
    'age'               =>  24,
    'contact'           =>  '01378276163',
    'location'          => 'Banani'       


],

[
    'name'              => 'Abdul',
    'age'               =>  23,
    'contact'           =>  '01578276163',
    'location'          => 'Rampura'       


    
],

[

    'name'              => 'Mabud',
    'age'               =>  22,
    'contact'           =>  '01778276163',
    'location'          => 'Mirpur'       



],

[
    'name'              => 'Tom',
    'age'               =>  22,
    'contact'           =>  '01978276163',
    'location'          => 'Rampura'       



],

[
    'name'              => 'John',
    'age'               =>  21,
    'contact'           =>  '01578276163',
    'location'          => 'Mirpur'       



],
[

    'name'              => 'Martin',
    'age'               =>  25,
    'contact'           =>  '01778276163',
    'location'          => 'Banani'       



]









];


foreach($student_data as $info){

    if($info['location'] =='Banani' ||$info['location'] =='Mirpur'){


     echo "Student Name =".$info['name']."<br>";
     echo "Student Age =".$info['age']."<br>";
     echo "Student Number =".$info['contact']."<br>";
     echo "Student Residential information =".$info['location']."<hr>";





    }
    
    else{


   echo "<span style = 'color:red;font-size:35px;'>Other Location</span>". "<br>";

   echo "<hr>";

    }




}











?>
    
</body>
</html>