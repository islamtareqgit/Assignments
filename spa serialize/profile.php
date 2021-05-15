
<?php


$id = $_POST['id'];

$connection = new mysqli('localhost','root','','ajax 129');

$data = $connection -> query("SELECT * FROM students WHERE id ='$id'");

$profile_data = $data -> fetch_object();

?>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>User Profile:<?php echo $profile_data->name;?></h2>
				<img style="width:300px; height= 300px; border-radius:50%; margin:50px auto; display:block;"src="photo/<?php echo $profile_data->photo;?>" alt="">
				<h1 class="text-center"><?php echo $profile_data->name;?></h1>
				<h3 class="text-center"><?php echo $profile_data->cell;?></h3>

				<table class="table">
				
				<tr>
				
				<td>Name</td>
				<td><?php echo $profile_data->name;?></td>
				
				
				</tr>
				<tr>
				
				<td>Email</td>
				<td><?php echo $profile_data->email;?></td>
				
				
				</tr>
				<tr>
				
				<td>Cell</td>
				<td><?php echo $profile_data->cell;?></td>
				
				
				</tr>
				<tr>
				
				<td>Username</td>
				<td><?php echo $profile_data->username;?></td>
				
				
				</tr>
				
				
				
				</table>

				<a id="back" class="btn btn-primary" href="#">Back</a>
			</div>
		</div>
	</div>

	
	







	
