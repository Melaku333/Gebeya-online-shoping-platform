<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['id'])
    && isset($_POST['type']) && isset($_POST['Amount']) && isset($_POST['img'])) {  

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$id=validate($_POST['id']);
    $uname = validate($_POST['uname']);
	$Description = validate($_POST['Description']);

	$img = validate($_POST['img']);
	$type = validate($_POST['type']);
    $Amount = validate($_POST['Amount']);

	$user_data = 'uname='. $uname;


	if (empty($uname)) {
		header("Location: webadd.php?error= Name is required&$user_data");
	    exit();
	}else if(empty($Description)){
        header("Location: webadd.php?error=Description is required&$user_data");
	    exit();
	}
    else if(empty($id)){
        header("Location: webadd.php?error=ID is required&$user_data");
	    exit();
	}
    else if(empty($img)){
        header("Location: webadd.php?error=Image is required&$user_data");
	    exit();
	}
    else if(empty($type)){
        header("Location: webadd.php?error=Type is required&$user_data");
	    exit();
	}
    else if(empty($Amount)){
        header("Location: webadd.php?error=Amount is required&$user_data");
	    exit();
	}

	else{


	    $sql = "SELECT * FROM suk WHERE id='$id' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: webadd.php?error=The ID is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO suk(id, name, description,type,image,amount) VALUES('$id', '$uname', '$Description','$type','$img','$Amount')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: webadd.php?success=successfully added");
	         exit();
           }else {
	           	header("Location: webadd.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
    
}else{
	header("Location: webadd.php");
	exit();
}