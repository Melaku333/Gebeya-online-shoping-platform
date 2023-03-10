<html>
<head>
    
   
    
    <link rel="stylesheet" type="text/css" href="buycss.css">

<style type="text/css">
    body{
	display: flex;
	justify-content: center;
	align-items: center;
	height: 90vh;
    padding-top: 20px;
	flex-direction: column;
    min-height: 150vh;
}


    .buy{
        height: 454px;
        width: 776px;
        background-color: white;
        margin-top: 170;
        display: flex;
        box-shadow: 0 5px 25px rgb(0 0 0 / 60%);
        
        border: 1px solid #ccc;
        border-bottom-right-radius: 30px;
        border-top-right-radius: 30px;
    } 
    .buyimg{
       height: 450px;
        width: 390px;
        background-color: white;
         
        margin-left: 8;
        margin-bottom: 10;
    }  
    .buydetail{ background-color:  gray;
        width: 386;
        padding-left: 30;
        padding-right: 30;
 word-wrap:break-word;
         border: 1px solid #ccc;
        border-bottom-right-radius: 30px;
        border-top-right-radius: 30px;
    }
    .vert{ 
        width: 20;
       
        margin-right: 10;
        border-right: 2px solid #ccc;
     height: 390;
         margin-top: 37;
        background-color: transparent;
        
    }
    .des{
      word-wrap:break-word; 
        color: white;
        font-size: 1;
        letter-spacing: .5
    }
    .buydetail p{ word-wrap:break-word; 
        color: white;
        font-size: 17;
        
       padding-top: 150;
        margin-left: 10;
    }
    .buydetail>p ,.amount>.fi {
        font-weight: bold;
    }
  .buydetail .seller {
       
       color: white;
        font-size: 19;
      
        margin-left: 10;
      display:flex;
    }
    .seller {
        display: flex;
    }
    .seller p{ display: flex;
         color: white;
        font-size: 14;
       padding-top: 30;
        margin-left: -58;
        letter-spacing: .5;
    }
    .amount{ padding-top: 10;
        color: white;
        display: flex;
        margin-left:9;
        
    }
    
    .amount>.fi{
        text-decoration: underline;
    }    
    .amount p{
         color: white;
        font-size: 14;
       padding-top: 2;
        margin-left:;
        letter-spacing: .5;
        text-decoration: none;
    } 
    .amount .ds{
        display: flex;
    }
    .ds{
        margin-top: -10;
    
    }
    .buynow{
        color: white;
        border: 1px solid;
        width: 150;
        text-align: center;
        border-radius: 15px ;
        margin-top: 30;
        margin-left: 70;
        background-color: tomato;
        height: 36;
        padding-top: 4;
        text-decoration: none;
    }
    .buynow :hover{
        cursor: pointer;
        font-weight: bold;
    }
    .buynow a{
      text-decoration: none;
        color: white;
        
    }
    .like{
        font-size: 19;
        font-weight: bold;
        padding-top: 30;
        
        letter-spacing: 1;
        padding-bottom: 3;
        width: 300;
        border-bottom: 2px solid red;
        text-align: center
    }
    .allshop{
    margin-top: -3;
        margin-bottom: 50;
        margin-left: -70;
        padding-left: 20;
    }
    
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
    </style>
    </head>
    <body>
  <?php 
 require 'db_conn.php';
  
  $id=$_GET['myid']; 
   echo $id; 
$query="select * FROM suk where id='$id' ";
$query_run=mysqli_query($conn,$query);
$check_suk=mysqli_num_rows($query_run) >0;

if($check_suk){
    
    while($row=mysqli_fetch_array($query_run)){
        ?>
    <div class="buy">
       <div class="buyimg"><img src="cata/<?php echo $row['image']; ?>"></div>
    <div class="vert"></div>
  
           
           
         
        <div class="buydetail"><p>Description :</p>
                <span class="amount"> <p><span class="ds"><?php echo $row['description']; ?></span></p></span>
        <span class="amount"><span class="fi">ID:</span><p><?php echo $row['id']; ?></p></span>
            <span class="amount"><span class="fi">Amount :</span><p><?php echo $row['amount']; ?>$</p></span>
               
               <div class="buynow"> <a href="pay.php?myid=<?php echo $id; ?>">BUY NOW
		</a></div>
           </div>
   
   
</div>
 
    <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>    
    
    <?php
        
    }
    
}else{
    
 echo "No result found!";   
}

?>

        
         
    
        

        
        
        
        <div class="like">You may also like </div>
        
        
        
        
        
        
             
 <div class="allshop">  

<div class="shop">
    <?php 

  
   $typ="clock"; 
    
$query="select * FROM suk where type='$typ' ";
$query_run=mysqli_query($conn,$query);
$check_suk=mysqli_num_rows($query_run) >0;

if($check_suk){
    
    while($row=mysqli_fetch_array($query_run)){
        $id= $row['id'];
        ?>
     <div class="suk">
       <div class="mainsuk">
    
    <img src="cata/<?php echo $row['image']; ?>">
           
           <p class="fd"><?php echo $row['name']; ?></p>
            </div>
   
   <div class="shopnow">  
       
       <a href="buy.php?myid=<?php echo $id; ?>">Read more
		</a>
       
    </div>
</div>
 
    <?php
     $id=$row['id'];   
    }
    
}else{
    
 echo "No result found!";   
}

?>

 
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
    
      
    
<script type="text/javascript">
    window.addEventListener("scroll",function(){
        var header=document.querySelector("header");
        header.classList.toggle("sticky",window.scrollY>0);
    })
    
    </script>
    
        
        
        
    </body>
    
</html>