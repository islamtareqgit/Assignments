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

if(isset($_POST['button'])){

echo "<pre>";
print_r($_POST);
echo "</pre>";

if(empty($std_name) || empty($email) || empty($cell) || empty($roll)){


echo "<span style='color:red;'>All fields are required</span>";


}
else{

echo "SUBMISSION OKK";
}

}



?>




<h1>Add new students</h1>

<form action="" method="POST">
  <div class="form-group"></div>
  <label for=""> Name</label>
   <input class="form-control" name="student_name"  type="text" placeholder="Wrtie your full name" >
   <div class="form-group"></div>
   <label for=""> Email</label>
    <input class="form-control" name="email" type="text" placeholder="Wrtie your mail address" >
    <div class="form-group"></div>
  <label for=""> Cell</label>
   <input class="form-control" name="number" type="number"placeholder="Wrtie your number" >
   <div class="form-group"></div>
  <label for=""> Roll</label>
   <input class="form-control" name="roll" type="number" placeholder="Wrtie your class role">
   <div class="form-group"></div>
  <button class="btn btn-success" name="button" value="submit">Insert</button>
  </form>

  <br> <br> <br>

  
  
  
<script src="Assets/js/jquery-3.4.1.js"></script>
<script src="Assets/js/proper.js"></script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/myscript.js"></script>



</body>
</html>