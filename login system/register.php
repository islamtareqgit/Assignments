
	<?php
	
	
	include_once "templates/header.php";
	
	?>

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Create Your Account</h2>
				<div class="msg"></div>

				<form id="user_reg_form" method="POST" enctype="multipart/form-data">
				
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">
					</div>
					
					<div class="form-group">
						<label for="">Email</label>
						<input id="reg_email" name="email" class="form-control" type="text">
						<span style="color:red;" id="reg_email_notice"></span>
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input name="username" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
					</div>
					<div class="form-group">
						<label for="">Photo</label>
						<input name="photo" class="form-control" type="file">
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Register">
					</div>
				</form>
			</div>

			<div class="card-footer">
			<a href="index.php">Log in now </a>
			
			
			
			</div>

			
		</div>
	</div>
	<?php
	
	
	include_once "templates/footer.php";
	
	?>
	







	