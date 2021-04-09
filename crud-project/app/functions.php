<?php


/**
 * Data create by create 
 */


 function create($sql){

    
return connection()-> query($sql);
	

 }

 /**
 * Data create function
 */


function all($table, $order='ASC'){

//$sql = "SELECT * FROM $table ORDER BY id $order";

return connection()-> query("SELECT * FROM $table ORDER BY id $order");

    
}


/**
 * file upload function
 */
function move($file, $location = '/', array $type = ['jpg','jpeg','gif','png']){
// file management
    $file_name = $file['name'];
	$file_name_tmp = $file['tmp_name'];
	$file_arr = explode('.', $file_name);
	$file_ext = end($file_arr);

	$file_unique = md5(time().rand()). '.'.$file_ext;

    $msg ='';

    if(in_array($file_ext, $type) == false){
      
        $msg_err = validate("Invalid file format");

    }else{

// upload file

move_uploaded_file($file_name_tmp, $location .$file_unique);

    }
    

    return [


        'file_unique' => $file_unique,
        
        'err_msg'  => $msg
    ];

}

/**
 * Data find function
 */


function find($table, $id){

    $data = connection() -> query("SELECT * FROM $table WHERE id ='$id'");


    return $data -> fetch_object();
    
}
/**
 * Data delete function
 */


function delete($table, $id)
{

    connection()-> query("DELETE FROM $table WHERE id ='$id'");
    
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