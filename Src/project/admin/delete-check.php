<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) ) {  

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name=validate($_POST['name']);
    
	$user_data = 'name='. $name;


	if (empty($name)) {
		header("Location: webdelete.php?error= ID is required&$user_data");
	    exit()
            ;
	}
	else{


	    $sql = "SELECT * FROM suk WHERE id='$name' ";
		$result = mysqli_query($conn, $sql);

		
           $sql2 = "DELETE FROM suk where id=$name";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: webdelete.php?success=successfully deleted");
	         exit();
           }else {
	           	header("Location: webdelete.php?error=unknown error occurred&$user_data");
		        exit();
           }
		
	}
    
}else{
	header("Location: webdelete.php");
	exit();
}