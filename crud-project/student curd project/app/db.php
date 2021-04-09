<?php


/**
 * Database connection
 */

$host= 'localhost';
$user = 'root';
$pass = '';
$db = 'stc';


function connection(){
    
    global $host, $user, $pass, $db;

    return $connect = new mysqli($host, $user, $pass, $db);


}



 





     





 



?>