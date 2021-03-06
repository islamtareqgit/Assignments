<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.13.0-web/css/all.min.css"/>
    <link rel="stylesheet" href="Assets/css/bootstrap.css">
    <link rel="stylesheet" href="Assets/fontawesome-free-5.13.0-web/css/all.min.css"/>
    <link rel="stylesheet" href="Assets/css/style.css">
    <title>Content upload</title>
</head>
<body>

<?php

if(isset($_POST['loading'])){

 $file = $_FILES['profile-picture'];

echo "<pre>";

echo print_r($file);

echo "</pre>";

// file info

$file_name = $file['name'];
$tmp_name =  $file['tmp_name'];
$file_size =  $file['size'];


move_uploaded_file($tmp_name, 'image/'. $file_name);

}






?>

<div class="wrap shadow">

<div class="card">

<div class="card-body">

<h1>Students list</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="form-group"></div>
<label for="file_upload"><img data-toggle="tooltip" data-placement="right" title="profile photo" src="file.png" width =100 alt="" style="cursor:pointer;"></label>

<input name="profile-picture" type="file" style="display:none;" id ="file_upload">

<div class="form-group"></div>
<input name="loading" class="btn btn-sm btn-success" type="submit" value="Upload Now">


</div>



</div>



</div>










</form>






<script src="Assets/js/jquery-3.4.1.js"></script>
<script src="Assets/js/proper.js"></script>
<script src="Assets/js/bootstrap.js"></script>
<script src="Assets/js/myscript.js"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

</script>


    
</body>
</html>   
