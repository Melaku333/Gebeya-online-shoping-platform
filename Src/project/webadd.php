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
     <form action="add-check.php" method="post">
     	<h2>Add content to the web</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>ID</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="id" 
                      placeholder="ID"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="id" 
                      placeholder="ID"><br>
          <?php }?>

          <label>name</label>
     	<input type="text" 
                 name="uname" 
                 placeholder="ID"><br>


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