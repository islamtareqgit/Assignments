<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form design</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.13.0-web/css/all.min.css"/>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.13.0-web/css/all.min.css"/>
    <link rel="stylesheet" href="Assets/css/style.css">
    
</head>
<body>




<?php

// isseting form

if(isset($_POST['button'])){

// Form value get
   $std_name = $_POST['student_name'];
   $email = $_POST['email'];
   $cell = $_POST['number'];
   $roll = $_POST['roll'];
   $age = $_POST['student_age'];
   

   // check mail

   $mail_arr= explode('@', $email);
   $inst_id = end($mail_arr);

    // cell number validate

 

  $cell_new = substr($cell, 0,3);







  
  // each input field checking
  
  if(empty($std_name)){

   $err['student_name']= "<p style='color:red';>*** Name is Required</p>";


  }
  if(empty($email)){

    $err['email']= "<p style='color:red';>*** email is Required</p>";


  }
  
  if(empty($cell)){

    $err['number']= "<p style='color:red';>***cell number is Required</p>";


  }
  
  if(empty($roll)){

    $err['roll']= "<p style='color:red';>***roll number is Required</p>";


  }
  if(empty($age)){

    $err['student_age']= "<p style='color:red';>***age is Required</p>";


  }
  
  
  
  


// FORM VALIDATION
if(empty($std_name) || empty($email) || empty($cell) || empty($roll) || empty($age)){


 $info = "<p class='alert alert-warning'>All fields are required!!<button class='colse' data-dismiss='alert'>&times;</button></p>";


}elseif(filter_var( $email, FILTER_VALIDATE_EMAIL) == false){

  $info = "<p class='alert alert-danger' role='alert'>Email not recognized!!<button class='colse' data-dismiss='alert'>&times;</button></p>";


}elseif($inst_id != 'coderstrustbd.com'){

  $info = "<p class='alert alert-secondary' role='alert'>mail is not institute mail!!<button class='colse' data-dismiss='alert'>&times;</button></p>";



}elseif(in_array($cell_new,['017','018','019','015','013'])== false){

  $info = "<p class='alert alert-warning' role='alert'> opeartor is not valid!!<button class='colse' data-dismiss='alert'>&times;</button></p>";


}elseif(in_array($age, ['20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36','37','38','39','40'])== false){

  $info = "<p class='alert alert-warning' role='alert'> age is not valid for signup!!<button class='colse' data-dismiss='alert'>&times;</button></p>";



}


else{

  $info = "<p class='alert alert-info' role='alert'>Information STABLE<button class='colse' data-dismiss='alert'>&times;</button></p>";
}

}



?>

<div class="wrap shadow">
<div class="card">
<div class="card-body">

<h1>Add new students</h1>

<?php
if(isset($info)){


  echo  $info; 

}

?>


<form action="" method="POST" enctype="multipart/formdata">
  <div class="form-group">
  <label for=""> Name</label>
   <input class="form-control" name="student_name"  type="text" placeholder="Wrtie your full name">

   <?php
   
   if(isset($err['student_name'])){

   echo $err['student_name'];

   }
   
   ?>
</div>
   <div class="form-group">
   <label for=""> Email</label>
    <input class="form-control" name="email" type="text" placeholder="Wrtie your mail address" >

    <?php
   
   if(isset($err['email'])){

   echo $err['email'];

   }
   
   ?>


    </div>
    <div class="form-group">
  <label for=""> Cell</label>
   <input class="form-control" name="number" type="number"placeholder="Wrtie your number" >

   <?php
   
   if(isset($err['number'])){

   echo $err['number'];

   }
   
   ?>
   
   </div>
   <div class="form-group">
  <label for=""> Roll</label>
   <input class="form-control" name="roll" type="text" placeholder="Wrtie your class roll">

   <?php
   
   if(isset($err['roll'])){

   echo $err['roll'];

   }
   
   ?>
</div>

<div class="form-group">

<label for="">Age</label>
<input class="form-control" name="student_age" type="text" placeholder="Wrtie your age">

<?php
if(isset($err['student_age'])){

echo $err['student_age'];


}


?>


</div>


   
   <div class="form-group">
  <button class="btn btn-primary" name="button" value="submit">Insert</button>
  </div>
  </form>
  </div>
  </div>
  </div>



  <br> <br> <br>

  
  
  
<script src="Assets/js/jquery-3.4.1.js"></script>
<script src="Assets/js/proper.js"></script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/myscript.js"></script>



</body>
</html>