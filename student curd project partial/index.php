
<?php

include_once "autoload.php";



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Development Area</title>

	
	    <!-- ALL CSS FILES  -->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>



	<?php
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
	 $dept = $_POST['department'];

       if(isset($_POST['gender'])){

		$gender = $_POST['gender'];

	   }
      
	// file management

	$file_name = $_FILES['photo']['name'];
	$file_name_tmp = $_FILES['photo']['tmp_name'];
	$file_arr = explode('.', $file_name);
	$file_ext = end($file_arr);

	$file_unique = md5(time().rand()). '.'.$file_ext;


	// Form validation

	if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($location) || empty($age)|| empty($gender) || empty($dept)){


	$msg = validate("All fields are required");
	   
	   
	   }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){

       
	 $msg = validate("Invalid Email");;


	   }else{

		// Data insert 
		
		$data =("INSERT INTO students (name, email, cell, username, location, age, department, photo) VALUES ('$name','$email','$cell','$username', '$location','$age','$dept','$file_unique')");

		$connect -> query($data);

		// uploading profile photo

		move_uploaded_file($file_name_tmp, 'photos/'.$file_unique);

		$msg =validate('Data stable', 'success');

	   }
	
	}
	
	?>
	
	
	

	 <!-- TABLE CREATE  -->

	<div class="wrap-table">
	<a class="btn btn-primary" data-toggle="modal" href="#add_student_modal">Add new student</a>
	<br><br>
		<div class="card">
		<div class="card-body shadow">
		<h2>All student</h2>

		<?php
		
		if(isset($msg )){

         echo $msg; 

		}
		
		
		?>
		<table class="table table-striped">
		<thead>
	    <tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		 <th>Cell</th>
		 <th>Username</th>
		 <th>Location</th>
		 <th>Age</th>
		
		 <th>Photo</th>
		<th>Action</th>
		</tr>
	    </thead>
		<tbody>

           <?php
		   
		   $sql = "SELECT * FROM students ORDER BY id DESC";
		   $data = $connect -> query($sql);

           
		   

		   $i = 1;


		   while( $users_info = $data -> fetch_object()):
		 
		 
		 
		 
		 ?>
		
     

		<tr>
		
		<td> <?php echo  $i; $i++;?></td>
	   <td><?php echo $users_info -> name ?></td>
		<td><?php echo $users_info -> email ?></td>
		<td><?php echo $users_info -> cell ?></td>
		<td><?php echo $users_info -> username ?></td>
		<td><?php echo $users_info -> location ?></td>
		<td><?php echo $users_info -> age ?></td>
		
		<td><img src="photos/<?php echo $users_info -> photo?>" alt=""></td>
	
	   
		<td>
		<a class="btn btn-sm btn-info" href="#">View</a>
		<a class="btn btn-sm btn-warning" href="#">Edit</a>
		<a class="btn btn-sm btn-danger" href="#">Delete</a>
		</td>
		</tr>
		<?php endwhile;?>
		
					

	</tbody>
	</table>
	</div>
	</div>
	</div>

	<!-- stdent create modal---->

	<div id="add_student_modal" class="modal fade"> 
	<div class="modal-dialog modal-dialog-centered">
	<div class="modal-content">
	
	<div class="modal-header"></div>
	<h2>Add new student</h2>
	<div class="modal-body">
	
	<form action="" method="POST" enctype="multipart/form-data">
	<div class="form-group">
	<label for="">Student Name</label>
	<input name="name" class="form-control" type="text">


					
	</div>
	<div class="form-group">
	<label for="">Email</label>
    <input name="email" class="form-control" type="text">


	<?php
						
	if(isset($_POST['email'])){

    echo $_POST['email'];

  }
						
						
						
?>
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell"  class="form-control" type="number">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Location</label>

						<select class="form-control" name="location" id="">
							<option value="">-Select-</option>
							<option value="Khilgaon">Khilgaon</option>
							<option value="Banani">Banani</option>
							<option value="Gulshan">Gulshan</option>
							<option value="Rampura">Rampura</option>
							<option value="Uttara">Uttara</option>
							<option value="Banasree">Banasree</option>
							

						</select>

					</div>
                    <div class="form-group">
						<label for="">Age</label>
						<input name="age" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Gender</label><br>
						<input name="gender" type="radio" checked value="Male"  id="Male"><label for="">Male</label>
						<input name="gender" type="radio" value="Female" id="Female"><label for="">Female</label>
					</div>
					<div class="form-group">
						<label for="">Department</label>

						<select class="form-control" name="department" id="">
							<option value="">-Dept-</option>
							<option value="BBA">BBA</option>
							<option value="CSE">CSE</option>
							<option value="ENG">ENG</option>
							<option value="Sociology">Sociology</option>
							<option value="Economics">Economics</option>
							<option value="EEE">EEE</option>
							

						</select>

					</div>

					<div class="form-group">
						<label for="">Profile photo</label><br>
						<img id="load_stu_img" style="max-width:100%;" src="" alt="">
						<br>
						<input class="form-control" type="text">
					</div>

					<div class="form-group">
						<label style="cursor:pointer;" for="student_photo"><img src="assets/media/picture.png" alt="" width=80></label>
						<input id="student_photo" name="photo" style="display:none; class="form-control" type="file">
					</div>
					


					<div class="form-group">
					<label for=""></label>
						<input name="click" class="btn btn-primary" type="submit" value="add student">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	

	
	</div>
	<div class="modal-footer"></div>
	
	</div>
	
	</div>
	
	
	</div>


	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	<script>
	
	$('#student_photo').change(function(e){



     let file_url = URL.createObjectURL(e.target.files[0]);

	 $('#load_stu_img').attr('src',file_url);



	});
	
	</script>

</body>
</html>