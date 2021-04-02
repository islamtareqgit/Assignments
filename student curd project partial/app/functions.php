<?php


/**
 * Data create function
 */


 function create($sql){

	

 }

 /**
 * Data create function
 */


function all($table, $order='ASC'){

$sql = "SELECT * FROM $table ORDER BY id $order";

return $data -> query($sql);

    
}
/**
 * Data create function
 */


function find(){



    
}
/**
 * Data create function
 */


function delete(){



    
}
/**
 * Data create function
 */


function update(){



    
}
/**
 * validate function for error message
 */

 function validate($msg, $type='danger')
 
 {


return "<p class='alert alert-$type'>$msg!!<button class='colse' data-dismiss='alert'>&times;</button></p>";

 }


?>