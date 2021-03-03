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
   $std_name = $_POST['student_name']. "<br>";
   $email = $_POST['email']."<br>" ;
   $cell = $_POST['number']."<br>" ;
   $roll = $_POST['roll'];
  
  if(empty($std_name)){

   $err['student_name']= "<p style='color:red';>***Required</p>";


  }



// FORM VALIDATION
if(empty($std_name) || empty($email) || empty($cell) || empty($roll)){


 $info = "<p class='alert alert-danger'; class='size';>All fields are required!!<button class='colse' data-dismiss='alert'>&times;</button></p>";


}
else{

  $info = "<p class='alert alert-primary'>Information STABLE</p>";
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


<form action="" method="POST">
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

    </div>
    <div class="form-group">
  <label for=""> Cell</label>
   <input class="form-control" name="number" type="number"placeholder="Wrtie your number" >
   </div>
   <div class="form-group">
  <label for=""> Roll</label>
   <input class="form-control" name="roll" type="text" placeholder="Wrtie your class roll">
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