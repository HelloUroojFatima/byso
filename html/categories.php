<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/style.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&family=Andika:ital@0;1&display=swap");
    </style>
    <title>BYSO</title>
  </head>
  <body>
    <div class="header">
    <a href="index.php">  <img id="logo" src="../img/logo.png" /> </a>
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
    <div class="categories">
      <a href="producttype.php?type=<?php echo 'Dry'?>"><p id="dry">Dry skin</p></a>
       <a href="producttype.php?type=<?php echo 'Dry'?>"> <img id="drypic" src="../img/dry.jpg"/></a>
      <a href="producttype.php?type=<?php echo 'Oily'?>"> <p id="oily">Oily skin</p></a>
      <a href="producttype.php?type=<?php echo 'Oily'?>"><img id="oilypic" src="../img/oily.jpg" /></a>

      <a href="producttype.php?type=<?php echo 'Normal'?>"><p id="normal">Normal</p></a>
      <a href="producttype.php?type=<?php echo 'Normal'?>"><img id="normalpic" src="../img/normal.png" /></a>

      <a href="producttype.php?type=<?php echo 'Acne'?>" ><p id="acne">Acne</p></a>
      <a href="producttype.php?type=<?php echo 'Acne'?>"> <img id="acnepic" src="../img/acne.jpg" /></a>
      <a href="producttype.php?type=<?php echo 'Sensitive'?>"><p id="sensitive">Sensitive</p>
      <a href="producttype.php?type=<?php echo 'Sensitive'?>"><img id="sensitivepic" src="../img/sensitive.jpg" /></a>

      <a href="producttype.php?type=<?php echo 'Combination'?>"><p id="combination">Combination</p></a>
      <a href="producttype.php?type=<?php echo 'Combination'?>"><img id="combinationpic" src="../img/combination.png" /></a>
    </div>

    <div class="footer">
      <h4>where you can find us</h4>
      <a href="#"><p id="info">byso.instagram.com</p></a>
      <a href="#"> <p id="info">byso.facebook.com</p></a>
      <img id="insta" src="../img/insta.png" />
    </div>
  </body>
</html>
