<?php
    include('../DatabaseConnection.php');
 ?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <link rel="stylesheet" href="../css/style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&family=Andika:ital@0;1&display=swap");
    </style>
    <title>BYSO</title>
  </head>
  <body >
    <div class="header">
      <img id="logo" src="../img/logo.png" /> 

      <ul id="navbar">
        <a href="q1.html"><li>Skin Concern</li></a>
        <div class="dropdown">
        <span><li>Discover</li></span>
        <div class="dropdown-content">
         <a href="productcategory.php?type=<?php echo 'Lotion'?>" > <p style="color: aliceblue; margin-top: 10px">Lotions</p> </a>
         <a href="productcategory.php?type=<?php echo 'Cleanser'?>" > <p style="color: aliceblue; margin-top: 10px">Cleansers</p> </a>
         <a href="productcategory.php?type=<?php echo 'Serum'?>"> <p style="color: aliceblue; margin-top: 10px" >Serums</p> </a>
         <a href="productcategory.php?type=<?php echo 'Sunscream'?>"> <p style="color: aliceblue; margin-top: 10px" >Sunscreams</p> </a>
         <a href="productcategory.php?type=<?php echo 'Mask'?>"> <p  style="color: aliceblue; margin-top: 10px">Masks</p> </a>
         <a href="productcategory.php?type=<?php echo 'Face wash'?>"> <p style="color: aliceblue; margin-top: 10px">Face Washes</p> </a>
         <a href="productcategory.php?type=<?php echo 'Body wash'?>"> <p style="color: aliceblue; margin-top: 10px">Body Washes</p> </a>
         <a href="productcategory.php?type=<?php echo 'Lip Balm'?>"> <p style="color: aliceblue; margin-top: 10px">Lip Balms</p> </a>
         
         </div>
        </div>
        

        <a href="gender.php?type=<?php echo 'Men'?>"> <li>Men</li></a>
        <a href="gender.php?type=<?php echo 'Women'?>"><li>Women</li></a>
        <div class="dropdown">
        <span><li>Set</li></span>
        <div class="dropdown-content">
        <a href="producttype.php?type=<?php echo 'All'?>" > <p style="color: aliceblue; margin-top: 10px">All Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Dry'?>" > <p style="color: aliceblue; margin-top: 10px">Dry Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Oily'?>" > <p style="color: aliceblue; margin-top: 10px">Oily Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Acne'?>"> <p style="color: aliceblue; margin-top: 10px">Acne Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Normal'?>"> <p style="color: aliceblue; margin-top: 10px">Normal Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Sensitive'?>"> <p style="color: aliceblue; margin-top: 10px">Sensitive Skin</p> </a>
         <a href="producttype.php?type=<?php echo 'Combination'?>"> <p style="color: aliceblue; margin-top: 10px">Combination Skin</p> </a>
         
         </div>
        </div>
      </ul>

      <ul id="addAccount">
        <a href="JoinUs.html"><li>Join Us</li></a>
        <a href="SignIn.html"><li id="r_li">Sign In</li></a>
      </ul>
    </div>

    <div class="mainbody">
      <div id="slideshow">
        <div class="slide-wrapper">
          <div class="slide">
            <img src="../img/img1.webp" />
          </div>
          <div class="slide">
            <img height="430" src="../img/img2.webp" />
          </div>
          <div class="slide">
            <img height="550" src="../img/img3.jpg" />
          </div>

          <div class="slide">
            <img src="../img/img5.jpg" />
          </div>
        </div>
      </div>

      <div class="search"> 
        <h3>SEARCH BY</h3>
        <div class="searchicon">
        <a href="categories.php"> <img id="icons" src="../img/icon1.png" /> </a>

        <a href="priceList.php"> <img id="icons" src="../img/icon2.png" /> </a>

        <a href="itemsList.php"> <img id="icons" src="../img/icon3.png" /> </a>

        <a href="categories.php"> <p id="txt">In Sets</p> </a>
        <a href="priceList.php"> <p id="txt">Price Under 4000</p> </a>
        <a href="itemsList.php"> <p id="txt1">All Items</p> </a>
        </div>
      </div>

      <div class="concerns">
        <a href="q1.html"><p id="skin_c">Find Your Skin Type</p></a>
        <img id="arrow" src="../img/arrow.png" />
        <img id="imgconcern" src="../img/concern.png" />
      </div>
    </div>
    <div class="trending">
      <p id="td">Trending</p>
      <?php
    $query="SELECT *
    FROM products  ";

$data=mysqli_query($db_connection,$query);
$result = mysqli_fetch_assoc($data);
      ?>
      <a href="productView.php?productId=<?php echo  $result['productId']?>"> <img id="pro" src="<?php echo $result['image1'];?>" /> </a>
      <?php $result = mysqli_fetch_assoc($data); ?>
     <a href="productView.php?productId=<?php echo  $result['productId']?>"> <img id="pro" src="<?php echo $result['image1']; ?>" /> </a>
      <?php $result = mysqli_fetch_assoc($data); ?>
      <a href="productView.php?productId=<?php echo  $result['productId']?>"> <img id="pro" src="<?php echo $result['image1']; ?>" /> </a>
      <?php $result = mysqli_fetch_assoc($data); ?>
      <a href="productView.php?productId=<?php echo  $result['productId']?>"> <img id="pro" src="<?php echo $result['image1']; ?>" /> </a>
    
    </div> 

    
    <div class="footer">
      <div>
      <h4>where you can find us</h4>
      <a href="#"><p id="info">byso.instagram.com</p></a>
      <a href="#"> <p id="info">byso.facebook.com</p></a>
      <img id="insta" src="../img/insta.png" />
    </div>
    
  </body>
</html>
