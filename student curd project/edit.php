




<?php


include_once "autoload.php";


/**
	 * isseting student add form
	 * 
	 */
	
	if(isset($_POST['click'])){

		//  get value
   
		$name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$username = $_POST['username'];
		$location = $_POST['location'];
		$age = $_POST['age'];
		$gender = '';
   
		if(isset($_POST['gender'])){
   
		   $gender = $_POST['gender'];
   
		 }
		$dept = $_POST['department'];

		$id = $_GET['edit_id'];
   
   
		
		  
		 
   
		// Email check
   
		
   
	   // Form validation
   
	   if(empty($name) || empty($email) || empty($cell) || empty($username)){
   
   
	   $msg = validate("All fields are required");
		  
		  
		  }
		  
		  elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
   
		  
		$msg = validate("Invalid Email");
   
   
		  }
		  
		  else{
		   connection()-> query("UPDATE students SET name='$name', email='$email', cell='$cell', username='$username', location='$location', age='$age', department='$dept' WHERE id='$id'");
   
		   $msg = validate("Data update successful", 'success');
		   
   
		  }
	   
	   }

/**
 * Find editable student data
 */
if(isset($_GET['edit_id'])){

$id = $_GET['edit_id'];

$edit_data = find('students',$id);



}




?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit students</title>

	
	    <!-- ALL CSS FILES  -->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>



<div class="container">

<div class="row">

<div class="col-lg-6 mx-auto mt-5">
<a class="btn btn-primary " href="index.php">Back</a>

<div class="card">

<div class="card-body">
<h2>Student Data Edit</h2>
<?php
		
		if(isset($msg )){

         echo $msg; 

		}
		?>
<hr>

<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label for="">Student Name</label>
	<input name="name" class="form-control" value="<?php echo $edit_data -> name;?>" type="text">


					
	</div>
	<div class="form-group">
	<label for="">Email</label>
    <input name="email" class="form-control" value="<?php echo $edit_data -> email;?>" type="text">


	
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" value="<?php echo $edit_data -> cell;?>"  type="number">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" value="<?php echo $edit_data -> username;?>" type="text">
					</div>
					<div class="form-group">

						<label for="">Location</label>

						<select class="form-control" name="location" id="">
							<option value="">-Select-</option>

							
							<option <?php echo($edit_data -> location =='Banani') ?  'selected' : ''; ?> value="Banani">Banani</option>
							<option  <?php echo($edit_data -> location =='Gulshan') ? 'selected' : ''; ?>value="Gulshan">Gulshan</option>
							<option <?php echo($edit_data -> location =='Rampura') ? 'selected' : ''; ?> value="Rampura">Rampura</option>
							<option <?php echo($edit_data -> location =='Uttara') ?  'selected' : ''; ?> value="Uttara">Uttara</option>
							<option <?php echo($edit_data -> location =='Banasree') ? 'selected' : ''; ?> value="Banasree">Banasree</option>
							

						</select>

					</div>
                    <div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" value="<?php echo $edit_data -> age;?>"  type="text">
					</div>
					<div class="form-group">

						<label for="">Gender</label><br>
						<input name="gender" type="radio" <?php echo($edit_data -> gender =='Male')? 'checked':'';  ?> value='Male' id="Male"><label for="Male">Male</label>
						<input name="gender" type="radio" <?php echo($edit_data -> gender =='Female')? 'checked':'';?>  value="Female" id="Female"><label for="Female">Female</label>
					</div>
					<div class="form-group">
						<label for="">Department</label>

						<select class="form-control" name="department" id="">

							<option value="">-Select-</option>
							
							<option <?php echo ($edit_data ->department =='CSE')? 'selected' : '';?> value="CSE">CSE</option>
							<option <?php echo ($edit_data ->department =='ENG')? 'selected' : '';?> value="ENG">ENG</option>
							<option <?php echo ($edit_data ->department =='Sociology')? 'selected' : '';?> value="Sociology">Sociology</option>
							<option <?php echo ($edit_data ->department =='Economics')? 'selected' : '';?> value="Economics">Economics</option>
							<option <?php echo ($edit_data ->department =='EEE')? 'selected' : '';?> value="EEE">EEE</option>
							<option <?php echo ($edit_data ->department =='MBA')? 'selected' : '';?> value="MBA">MBA</option>
							

						</select>

					</div>

					<div class="form-group">
						<label for="">Profile photo</label><br>
						<img id="load_stu_img" style="max-width:100%;" src="" alt="">
						<br>
						<input class="form-control" type="text">
					</div>

					<div class="form-group">
						<label style="cursor:pointer;" for="student_photo"><img src="photos/<?php echo $edit_data -> photo;?>" alt="" width=250></label>
						<input id="student_photo" name="photo" style="display:none; class="form-control" type="file">
					</div>
					


					<div class="form-group">
					<label for=""></label>
						<input name="click" class="btn btn-primary" type="submit" value="Update Student">
					</div>
				</form>








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