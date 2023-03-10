<html>
<head>
    <link rel="stylesheet" type="text/css" href="admin.css">
    <style type="text/css">
        body{
            max-height: 100vh;
        }
        
        .all{
            margin-left: 400;
            margin-top: -650;
            width: 40%;
        }
        form{
            width: 900;
        }
        form input{
            width: 400;
            height: 40;
        }
        label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}
        form { margin-top: 130px;
	width: 600px;
    margin-bottom: 50px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}
       
button {
	float: right;
	background: #555;
	padding: 10px 15px;
    margin-top: -51;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
    width: 130px;
    height: 43px;
}

button:hover{
	opacity: .7;
    cursor: pointer;
}
       input {
	border: 1px solid #ccc;
	
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
    </style>
    </head>
   <body>
      <div class="ras">
      <h2>ADMIN PANEL</h2>
    </div>
    
    <div class="gon">
   
      <a href="index.php">Dashboard</a>
        <a href="webcontent.php">Web Content</a>
        <a href="webuser.php">Web User</a>
    
    </div>
       
       <div class="all">
     <form action="delete-check.php" method="post">
     	<h2>Delete content</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>ID</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder=""
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder=""><br>
          <?php }?>

     	<button type="submit">DELETE</button>
          
     </form>
    
 </div>    
       
       
       
        </body>
</html>