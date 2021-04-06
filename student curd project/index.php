
<?php

include_once "autoload.php";

// student data delete process

if(isset($_GET['delete_id'])){

 $delete_id = $_GET['delete_id'];
 $delete_photo =  $_GET['photo'];

unlink('photos/'.  $delete_photo);

delete('students', $delete_id);
header("location:index.php");

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Database system</title>

	
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

	 if(isset($_POST['gender'])){

		$gender = $_POST['gender'];

	  }
	 $dept = $_POST['department'];

       
      
	

	// Form validation

	if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($location) || empty($age)|| empty($gender) || empty($dept)){


	$msg = validate("All fields are required");
	   
	   
	   }elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){

       
	 $msg = validate("Invalid Email");;


	   }else{

		
		
		
		

		// uploading profile photo


		$data = move($_FILES['photo'], 'photos/',['doc', 'xls', 'jpg']);

      // get function

		$file_unique = $data['file_unique'];
		$msg_err = $data['err_msg'];

		if(empty($msg_err)){

        // Data insert 

		create("INSERT INTO students (name, email, cell, username, location, age, gender, department, photo) VALUES ('$name','$email','$cell','$username', '$location','$age','$gender', '$dept','$file_unique')");

		$msg =validate('Data stable', 'success');

		}else{

           
            $msg = $msg_err;
		}

		

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
		 <th>Gender</th>
		
		 <th>Photo</th>
		<th>Action</th>
		</tr>
	    </thead>
		<tbody>

           <?php
		   
		  
		   $data = connection() -> query("SELECT * FROM students ORDER BY id DESC");

           
		   

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
		<td><?php echo $users_info -> gender ?></td>
		
		<td><img src="photos/<?php echo $users_info -> photo?>" alt=""></td>
	
	   
		<td>
		<a class="btn btn-sm btn-primary" href="show.php?show_id=<?php echo $users_info -> id ?>">View</a>
		
		<a class="btn btn-sm btn-success" href="edit.php?edit_id=<?php echo $users_info -> id ?>">Edit</a>
		<a id="delete_btn" class="btn btn-sm btn-danger" href="?delete_id=<?php echo $users_info -> id ?>& photo=<?php echo $users_info -> photo?>">Delete</a>
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
						<input name="gender" type="radio" checked value="Male"  id="Male"><label for="Male">Male</label>
						<input name="gender" type="radio" value="Female" id="Female"><label for="Female">Female</label>
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

    $('#delete_btn').click(function(){


     let confirmation = confirm('Are you sure');

	 if(confirmation == true){

      return true;


	 }else{


		 return false;
	 }



	});
	
	</script>
	
	

</body>
</html>