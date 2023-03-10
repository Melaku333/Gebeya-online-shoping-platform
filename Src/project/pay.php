<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="lna.css">
    <style type="text/css">
    
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

.success {
   background: #D4EDDA;
   color: #40754C;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

.ca {
	font-size: 14px;
	display: inline-block;
	padding: 10px;
	text-decoration: none;
	color: #444;
}
.ca:hover {
	text-decoration: underline;
} 

form { margin-top: 130px;
	width: 600px;
    margin-bottom: 50px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

    </style>
</head>
<body>
     <form action="pay-check.php" method="post">
     	<h2>PAYMENT</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <?php 
         $id=$_GET['myid'];
        
         ?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          
     	<label>Phone number</label>
     	<input type="tel" 
                 name="phone" 
                 placeholder="Phone number"><br>
         
     	<label>Address</label>
     	<input type="text" 
                 name="Address" 
                 placeholder="Address"><br>
         
     	<label>Quantity</label>
     	<input type="number" 
                 name="Quantity" 
                 placeholder="Quantity"><br>
         <input type="hidden" name="id" value=<?php echo $id; ?>>
     	
     	<button type="submit">BUY NOW
		</button>
            </form>
    
    
 <header>
   <a href="#" class="logo">Gebeya</a>
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="index.php">Home</a></li>
          
          <li class="menu-item">
            <a class="sub-btn" href="#">Product<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="catafashion.php" >Fashion accessories</a></li>
              <li class="sub-item"><a href="catahome.php">Home applieans</a></li>
              <li class="sub-item"><a href="cataelectro.php">Electronics</a></li>
              <li class="sub-item"><a href="catabeauty.php">Beauty and Personal care</a></li>
                <li class="sub-item"><a href="catafurniture.php">Furniture</a></li>
                <li class="sub-item"><a href="catabooks.php">Books</a></li>
                
            </ul>
          </li>
          <li class="menu-item"><a href="#">About</a></li>
            <li class="menu-item"><div class="newlog">
                <a href="logout.php"><div class="newlogs>"><p>Sign out</p></div></a></div></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
    
    

    
    <footer>
    
<div class="fot">
        
        <div class="fo">
            <h4>SERVICES</h4>
            <p>Buy</p>
            <p>Sell</p>
            <p>Get hired</p>
            </div>
    
    
        <div class="fo">
            <h4>COMPANY</h4>
            <p>About us</p>
            <p>Contact us</p>
            <p>Customer service</p>
            </div>
    
    
        <div class="fo">
            <h4>LEARN MORE</h4>
            
            <p>Affilate program</p>
            <p>Reseller program</p>
            <p>Shiping program</p>
            </div>
    
    
         <div class="fo">
            <h4>CONNECT WITH US</h4>
             <p>Face book</p>
             <p>Linkdin</p>
             <p>Twitter</p>
            </div>
    
    
</div>
   <hr>
        <p>2014 Gebeya.inc  All rights reserved</p>
    </footer>
    
  <script type="text/javascript">
    window.addEventListener("scroll",function(){
        var header=document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY>0);
    })
    
    </script>  
</body>
</html>