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

<div class="menu">

<div class="container">

<div class="row">

<div class="col-lg-12">

<a id="all" class="btn btn-warning btn-sm" href="">All students</a>
<a id="add_student" class="btn btn-warning btn-sm" href="">Add new students</a>
<a id="profile" class="btn btn-warning btn-sm" href="">Profile</a>





</div>





</div>




</div>




</div>
	
	
<div class="app">


	

</div>
	





	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script>
	
	$('#add_student').click(function(){

     $. ajax({

     url: 'create.php',
	 success: function(data){
     $('.app'). html(data);



	 }

	 });
  

   return false;



	});


	$('#profile').click(function(){


   $. ajax({

     url: 'profile.php',
	 success: function(info){


     $('.app').html(info);


	 }




   });

   return false;

	});

	$('#all').click(function(){

   $. ajax({

   url: 'all.php',
   success: function(data){
  



   $('.app').html(data);




   }



   });

   return false;

	});


	
	$(document).on('submit','#student_form', function(){

		let name= $('#name').val();
		let email= $('#email').val();
		let cell= $('#cell').val();
		let username= $('#username').val();


		(name + email + cell + username);
		


		$. ajax({


       url: 'ajax_template/create.php',

	   method: "POST",


	   
        data:{

			name: name,
			email: email,
			cell: cell,
			username: username
		},
       success: function(data){
	   swal ('Student added successful');

	     $('#name').val('');
		 $('#email').val('');
		 $('#cell').val('');
		 $('#username').val('');





	   }


		});


		return false;


	});
	
	
	</script>
</body>
</html>