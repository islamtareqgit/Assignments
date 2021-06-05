<?php

include_once "../../autoload.php";



 $email = $_POST['email'];


$data = dataCheck('users', 'email', $email);


if($data == true){

echo "Email already exists!!!!";
}

?>




