
<?php 
session_start();


 if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
  header("Location:Homeed.php");
 exit();
}
 else{
     
?>

<html>
<head>
	<meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="cata.css">
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://kit.fontawesome.com/1696743b72.js" crossorigin="anonymous"></script>
    <style type="text/css">
              .navigation{
  position: relative;
  line-height: 65px;
  transition: 0.6s;
  transition-property: line-height;
}    
body {
	background-color: azure;
	display: flex;
	height: 90vh;
    padding-top: 20px;
	flex-direction: column;
    min-height: 130vh;
}   
      .allshop{
            background-color:azure;
        } 
        .suk{
            height: 305;
        }      
    </style>
</head>
<body>
 
            
 <div class="allshop">  

<div class="shop">
    <?php 
 require 'db_conn.php';
  
   $typ="Home applieans"; 
    
$query="select * FROM suk where type='$typ' ";
$query_run=mysqli_query($conn,$query);
$check_suk=mysqli_num_rows($query_run) >0;

if($check_suk){
    
    while($row=mysqli_fetch_array($query_run)){
        ?>
     <div class="suk">
       <div class="mainsuk">
    
    <img src="cata/<?php echo $row['image']; ?>">
           
           <p class="fd"><?php echo $row['name']; ?></p>
            </div>
   
   <div class="shopnow">  
       
       <a href="buy.html">Read more
       
           </a>
       
    </div>
</div>
 
    <?php
        
    }
    
}else{
    
 echo "No result found!";   
}

?>

 
</div> 
</div> 
 
    
    
    
    
     
 <div class="srch">
    <form class="search" action="search.php"  method="post">
        <i class="fas fa-search"></i>
        <input type="text" name="search" style="color: #fff" placeholder="SEARCH ANY PRODUCT">
         
        <button type="submit"> Search </button>
          
    </form>
    </div>
      
    
<div class="wrapper">
	<div class="menu">
		<div class="catamenu">
<span class="icon">	<img src="cata/white-menu-icon-png-18.jpg">  </span>
            <p class="caname">Catagories</p>
		</div>
		<div class="calist">
			<ul>
				<li><a href="catafashion.php" class="calis">
					<div class="wrap">
						<span class="text">Fashion accessories</span>
					</div>
				</a></li>
				<li><a href="catahome.php" class="calis">
					<div class="wrap">
						<span class="text">Home applieans</span>
					</div>
				</a></li>
				<li><a href="cataelectro.php"  class="calis">
					<div class="wrap">
						<span class="text">Electronics</span>
					</div>
				</a></li>
                <li><a href="catabeauty.php"  class="calis">
					<div class="wrap">
						<span class="text">Beauty and Personal care</span>
					</div>
				</a></li>
                <li><a href="catafurniture.php"  class="calis">
					<div class="wrap">
						<span class="text">Furniture</span>
					</div>
				</a></li>
				
				<li><a href="catabooks.php"  class="calis">
					<div class="wrap">
						<span class="text">Books</span>
					</div>
				</a></li>
			</ul>
		</div>
	</div>
</div>
    
    
    
    
    
     
    

    
    
    
    
    
    
    
    
    
    
    
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
    
    
    
    
    
    
    
<script>
	var catamenu = document.querySelector(".catamenu");
	var calist = document.querySelector(".calist");
	var calis =  document.querySelectorAll(".calis");

	catamenu.addEventListener("click", function(){
		calist.classList.toggle("active");
		calis.forEach(function(aitem){
			aitem.classList.remove("active");
		})
	})

	

	calis.forEach(function(aitem){

		aitem.addEventListener("click", function(){
			calis.forEach(function(aitem){
				aitem.classList.remove("active");
			})
			aitem.classList.add("active");
		})
	})
</script>

    

    </body>


</html>


<?php

}
 ?>