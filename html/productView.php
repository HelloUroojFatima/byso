 <?php
    include('../DatabaseConnection.php');
    
    if(isset($_GET['productId'])){
    $productId=$_GET['productId'];
    $query="SELECT *
    FROM products
    WHERE productId=$productId  ";

$data=mysqli_query($db_connection,$query);
$result = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <link rel="stylesheet" href="../css/productView.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&family=Andika:ital@0;1&display=swap");
    </style>
    <title><?php echo $result['name']  ?></title>
  </head>
  <body>
    <header class="heading">
        <p>FREE SHIPPING ON ALL ORDERS IN LAHORE</p>
    </header>
    
    <div class="header">
    <a href="index.php"> <img id="logo" src="../img/logo.png" /> </a>

      <ul id="navbar">
        <a href="q1.html"><li>Skin Concern</li></a>
        <a href="#"><li>Discover</li></a>
        <a href="categories.php"><li>Set</li></a>
        <a href="#"> <li>Men</li></a>
        <a href="#"><li>Women</li></a>
      </ul>

      <ul id="addAccount">
        <a href="JoinUs.html"><li>Join Us</li></a>
        <a href="SignIn.html"><li id="r_li">Sign In</li></a>
      </ul>
    </div>
    <table>
    <tr >
    <td rowspan=8 style="text-align: center;">
    <img id="pro" src="<?php echo $result['image1']; ?>" />
    </td>
    <td>
    <h3><?php echo $result['name']; ?></h3>
    </td>
    </tr>

    <tr>
      <td>
      <h3>Rs.<?php echo $result['price']; ?></h3>
      </td>
    </tr>
    <tr>
      <td>
        <p><b>Description: </b><i> <?php echo $result['description']; ?></i></p>
      </td>
    </tr>
    <tr>
      <td>
      <p><b>Category: </b><?php echo $result['category']; ?></p>
      </td>
    </tr>
    <tr>
      <td>
      <p><b>Skin Type: </b><?php echo $result['skinType']; ?></p>
      </td>
    </tr>

    <tr>
      <td>
      <p><b>Quantity: </b><?php echo $result['quantity']; ?></p>
      </td>
    </tr>

    <tr>
      <td>
      <p><b>Brand: </b><?php echo $result['brand']; ?></p>
      </td>
    </tr>

    <tr>
      <td>
        <br>
      <input type='submit' value='BUY NOW'>
        <input type='submit' value='ADD TO CART'>
     </td>
    </tr>
    </table>
    <div class="footer">
      <h4>where you can find us</h4>
      <a href="#"><p id="info">byso.instagram.com</p></a>
      <a href="#"> <p id="info">byso.facebook.com</p></a>
      <img id="insta" src="../img/insta.png" />
    </div>
  </body>
</hrml>

  <?php
    }
  ?>