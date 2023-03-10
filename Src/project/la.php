<?php 
 require 'db_conn.php';
  
  $id=$_GET['myid']; 
    echo $id;
$query="select * FROM suk where id=$id ";
$query_run=mysqli_query($conn,$query);

if($query_run)
    echo "working";
else 
    echo "not working";
    
    while($row=mysqli_fetch_assoc($query_run)){
        
        echo $row['image'];
 

        
    }

?>