<?php


/**
 * Database connection
 */

$host= 'localhost';
$user = 'root';
$pass = '';
$db = 'teacher';


function connection(){
    
    global $host, $user, $pass, $db;

    return $network = new mysqli($host, $user, $pass, $db);


}



 





     





 



?>