<?php 
session_start(); 
include "db_conn.php";
    $id=$_GET['myid'];
$query="select * FROM suk where id='$id' ";
$query_run=mysqli_query($conn,$query);
$check_suk=mysqli_num_rows($query_run) >0;

if($check_suk){
    
    while($row=mysqli_fetch_array($query_run))
    {
        $birr=$row['birr'];
    }
if (isset($_POST['name']) && isset($_POST['password'])
    && isset($_POST['phone'])  && isset($_POST['Quantity']) && isset($_POST['Address'])) {

	function validate($data) {
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$pass = validate($_POST['password']);
    $pho = validate($_POST['phone']);
	$quan = validate($_POST['Quantity']);
    $add = validate($_POST['Address']);
    
	$user_data = 'name='. $name;


	if (empty($name)) {
		header("Location: pay.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: pay.php?error=Password is required&$user_data");
	    exit();
	}
    else if(empty($pho)){
        header("Location: pay.php?error=Phone number is required&$user_data");
	    exit();
	}
    else if(empty($quan) || $quan==0){
        header("Location: pay.php?error=Quantity is required&$user_data");
	    exit();
	}
	else if(empty($add)){
        header("Location: pay.php?error=Address is required&$user_data");
	    exit();
	}
	else{

        $pass = md5($pass);

	    $sql = "SELECT * FROM gebeyauser WHERE user_name='$name' ";
		$result = mysqli_query($conn, $sql);
              

$check_suk=mysqli_num_rows($result) >0;

if($check_suk){
    
    while($row=mysqli_fetch_array($query_run))
        
    {
       $nowbirr=$row['birr']; 
    }
}else {
    echo "No result found !";
}
		if (mysqli_num_rows($result) == 0) {
			header("Location: pay.php?error=First you need to sign up &$user_data");
	        exit();
		}else{
           $sql2 = "INSERT INTO gebeyauser(birr)  VALUES('$nowbirr-$quan*$birr') WHERE user_name='$name' ";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: pay.php?success=You have successfully bought.");
	         exit();
           }else {
	           	header("Location: pay.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	
    }
}else{
	header("Location: pay.php");
	exit();
}