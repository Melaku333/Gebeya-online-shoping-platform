<html>
<head>
	
<link rel="stylesheet" type="text/css" href="webcon.css">
</head>
   <body>
      <div class="ras">
      <h2 class="adm">ADMIN PANEL</h2>
    </div>
    
    <div class="gon">
   
      <a href="index.php">Dashboard</a>
        <a href="webcontent.php">Web Content</a>
        <a href="webuser.php">Web User</a>
    
    </div>
       
      <div class="all">
     <form action="update-check.php" method="post">
     	<h2>Update content to the web</h2>
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
                      placeholder="ID"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="ID"><br>
          <?php }?>

          <label>Name</label>
     	<input type="text" 
                 name="uname" 
                 placeholder="Name"><br>


     	<label>Description</label>
     	<input type="text" 
                 name="Description" 
                 placeholder="Description"><br>

          <label>Type</label>
          <input type="text" 
                 name="type" 
                 placeholder="type"><br>
         <label>Image</label>
          <input type="text" 
                 name="img" 
                 placeholder="image"><br>
         <label>Amount</label>
          <input type="text" 
                 name="Amount" 
                 placeholder="Amount"><br>

     	<button type="submit">ADD</button>
          
     </form>
    
 </div>
       
       
        </body>
</html>