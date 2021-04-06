
<?php

include_once "autoload.php";

/**
 * 
 * show single student dtata
 */

if(isset($_GET['show_id'])){

$id = $_GET['show_id'];

$data = connection() -> query("SELECT * FROM students WHERE id='$id'");

$student_info = $data -> fetch_object();

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $student_info -> name;?></title>

	
	    <!-- ALL CSS FILES  -->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>


<div class="container">
<div class="row">
<div class="col-lg-7 mx-auto mt-5">

<div class="card">

<img class="dimg shadow" width='300' src="photos/<?php echo $student_info -> photo;?>" alt="">
<h2 class="text-center"><?php echo $student_info -> name;?></h2>
<p class="text-center"><?php echo $student_info -> username; ?></p>


<style>

.dimg{

width: 200px;
height: 200px;
margin: auto;
display: block;
border-radius: 50%;
border: 10px solid #fff;

}




</style>


<div class="card-body">

<table class="table">

<tr>

<td>Name</td>
<td><?php echo $student_info -> name;?></td>



</tr>

<tr>

<td>Email</td>
<td><?php echo $student_info -> email;?></td>
</tr>

<tr>

<td>Cell</td>
<td><?php echo $student_info ->cell;?></td>
</tr>
<tr>

<td>Location</td>
<td><?php echo $student_info -> location;?></td>
</tr>
<tr>

<td>Age</td>
<td><?php echo $student_info -> age;?></td>
</tr>

<td>Gender</td>
<td><?php echo $student_info -> gender;?></td>
</tr>
<td>Department</td>
<td><?php echo $student_info -> department;?></td>
</tr>
</table>

<a class="btn btn-info btn-sm" href="index.php">Back</a>


</div>







</div>











</div>











</div>













</div>






	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	

</body>


</html>