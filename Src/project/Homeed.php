
<html>
<head>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
   padding-left: 41%;
   width: 100%;
   border-radius: 5px;
 
    margin-top: 8;
    margin-bottom: -28;
}
.success {
  animation: hide 0s ease-in 4s;
  animation-fill-mode: forwards;
}

@keyframes hide {
  to {
    visibility: hidden;
    width: 0;
    height: 0;
      margin: 0;
      padding: 0;
  }
}
    </style>  
</head>
<body>
   <header>
   <a href="#" class="logo">Gebeya</a>
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="index.php">Home</a></li>
          
          <li class="menu-item">
            <a class="sub-btn" href="#">Product<i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="catafashion.php">Fashion accessories</a></li>
              <li class="sub-item"><a href="catahome.php">Home applieans</a></li>
              <li class="sub-item"><a href="cataelectro.php">Electronics</a></li>
              <li class="sub-item"><a href="catabeauty.php">Beauty and Personal care</a></li>
                <li class="sub-item"><a href="catafurniture.php">Furniture</a></li>
                <li class="sub-item"><a href="cata.html">Books</a></li>
                
            </ul>
          </li>
          <li class="menu-item"><a href="#">About</a></li>
            <li class="menu-item"><div class="newlog">
                <a href="logout.php"><div class="newlogs>"><p>Sign out</p></div></a></div></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
    
	<div id="slider" class="text">
		<figure>
			<img src="img/111.png" >
			<img src="img/222.png">
			<img src="img/333.png">
			<img src="img/444.png">
			<img src="img/111.png">
		</figure>
        <section class="center" >
            <p lang="am" style="font-family:cursive"> በገበያችን<br></p><br>
            
        </section>
       
        <p class="log"></p>
        
	</div>
   <div class="add">
       
       <p  lang="am" class="amh"><a href="#">ይሽጡ</a></p><p lang="am" class="amh"><a href="#">ይሸምቱ</a></p> <p lang="am" class="amh"><a href="#">ይገበያዩ</a></p> </div>
    
    
    
    
    
   <form class="search" action="search.php"  method="post">
        <input type="text" name="search" class="input" placeholder="Search any product" >
        <button type="submit" id="btn" class="input"><img src="img/search-button-icon-26.jpg"> </button>
          
    </form>
   
   
  
    
  
    
  <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>  
    
    
    
    
 
<div class="shop">
    
<div  id="mast">
    <h1>GET STARTED</h1>
       <div class="l">
      <a href="#">Login</a>
    </div>
    <div class="s">
       <a href="#">Sign up</a> 
    </div>
</div>
 <div class="suk">
       <div class="mainsuk">
    <p>Fashion accessories</p>
    <img src="suk/f2.jpg">
            </div>
   
   <div class="shopnow">  
       
       <a href="catafashion.php">shop now
       
           </a>
       
    </div>
</div>
  <div class="suk">
       <div class="mainsuk">
    <p>Home applieans</p>
    <img src="suk/h1.jpg">
            </div>
   
   <div class="shopnow">  
       
       <a href="catahome.php">shop now
       
           </a>
       </div>
</div>
<div class="suk">
       <div class="mainsuk">
    <p>Electronics</p>
    <img src="suk/c1.jpg">
            </div>
   
   <div class="shopnow">  
       
       <a href="cataelectro.php">shop now
       
           </a>
       
    </div>
</div>
</div> 

<div class="shop">
    
<div class="suk">
       <div class="mainsuk">
    <p>Beauty and Personal care</p>
      <a href="catabeauty.php"><img src="suk/bu0.jpg">
          </a>
            </div>
   <div class="shopnow">
    
       <a href="catabeauty.php">shop now
       
           </a>       
           
    </div>
</div>
 <div class="suk">
       <div class="mainsuk">
    <p>Furniture</p>
    <img src="suk/f4.jpg">
            </div>
   
   <div class="shopnow">  
       
       <a href="catafurniture.php">shop now
       
           </a>
       
    </div>
</div>
 
<div class="suk">
       <div class="mainsuk">
    <p>Books</p>
    <img src="suk/b0.jpg">
            </div>
   
   <div class="shopnow">  
       
       <a href="catabooks.php">shop now
       
           </a>
       
    </div>
</div>
</div>
    
   
    
    
    
    
    
    
    
    
    <div class="sell">
       <img src="suk/sell2.jpg">
        <div class="selld">
        <h2>SELL YOUR PRODUCT</h2>
               <div class="list">
               <span class="lis"><img src="suk/Work%20at%20anywhere%20PNG.png"><p style="padding-top: 8px;"> Work your business from any where </p></span>
                   <span class="lis"><img src="suk/favpng_button.png"><p> Remain open all the time </p></span>
                   <span class="lis"><img src="suk/details-icon-1398.png"><p>Expand your business to new markets </p></span>
                   <span class="lis"><img src="suk/pngfind.com-money-icon-png-537069.png"><p> Make transactions efficient</p></span>
                   <span class="lis"><img src="suk/NicePng_increase-png_683550.png"><p> Increase the efficency of your coustomer service </p></span>
               <p><a href="#">Learn More</a></p>  
            </div>
        </div>
    </div>
    
    <div class="hired">
    <img src="suk/sell0.jpg">
        <h2>Get Hired</h2>
        <div class="listhired">
            
            <span class="lis2"><img src="suk/pngaaa.com-1612385.png"><p>Sell products from our platform and get paid</p></span>
            <span class="lis2"><img src="suk/Pizza-delivery-illustration-transparent-PNG%20(1).png"><p>Start shiping goods and get instant payout</p></span>
            <span class="lis2"><img src="suk/ClipartKey_1005479.png"><p>Find works that work for you and your schedule</p></span>
            <span class="lis2"><img src="suk/job-hunting-rxe9sumxe9-clip-art-good-job-clipart-83127fcd646d341c9ce5b7f1c21b73d0.png"><p>Get rated for your work and get recognized for a job well done</p></span>
            
             <p><a href="#">Login</a></p> 
             <p><a href="#">Sign up</a></p> 
            
        </div>
    </div>
    
    
    
    
    
    
    
    
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