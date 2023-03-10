<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['name']) && isset($_POST['password'])
    && isset($_POST['phone'])  && isset($_POST['Quantity']) && isset($_POST['id']) && isset($_POST['Address'])) {

	function validate($data){
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
    $id=validate($_POST['id']);
	$user_data = 'name='. $name;
    
    
	
	if (empty($name)) {
		header("Location: pay.php?myid=$id&error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: pay.php?myid=$id&error=Password is required&$user_data");
	    exit();
	}
    else if(empty($pho)){
        header("Location: pay.php?myid=$id&error=Phone number is required&$user_data");
	    exit();
	}
    else if(empty($quan) || $quan==0){
        header("Location: pay.php? myid=$id&error=Quantity is required&$user_data");
	    exit();
	}
	else if(empty($add)){
        header("Location: pay.php?myid=$id&error=Address is required&$user_data");
	    exit();
	}else{
		
        $pass = md5($pass);

        
		$sql = "SELECT * FROM gebeyauser WHERE user_name='$name' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $name && $row['password'] === $pass) {
                 
             
               $birr=$row['birr'] ;
            
                $birr;
                
                
            
                

    
$query="select * FROM suk where id=$id ";
$query_run=mysqli_query($conn,$query);
$check_suk=mysqli_num_rows($query_run) >0;

if($check_suk){
    
    while($rowsuk=mysqli_fetch_array($query_run)){
      $amount=$rowsuk['amount']; 
 
     
    }
  

    
    
}else{
    
 echo "No result found!";   
}


$buy = "UPDATE gebeyauser SET birr=($birr-($quan*$amount))  WHERE user_name='$name'";

 $buyresult=mysqli_query($conn,$buy);
 
       if ($buyresult) { 
           	 header("Location: homeed.php?myid=$id&success=Ordered successfully!&done=1");
	         exit();
           }else {
	           	header("Location: pay.php?myid=$id&error=unknown error occurred&$user_data");
		        exit();
           }
                
                
                
                
            	      
            }else{
				header("Location: pay.php?myid=$id&error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: pay.php?myid=$id&error=Incorect User name or password");
	        exit();
		}
	}


		
	
}else{
	header("Location: pay-check.php");
	exit();
}

?>