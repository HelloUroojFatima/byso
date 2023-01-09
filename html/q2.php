<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/style2.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Akshar:wght@300;400&family=Andika:ital@0;1&display=swap");
    </style>
    <title>BYSO</title>
  </head>
  <body>
    <div class="header">
      <a href="index.php"><img id="logo" src="../img/logo.png" /></a>

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
    <div class="q2mainBody">
      <p id="q2">Select The Best Match</p>

      <img id="imgconcern2" src="../img/concern.png" />
      <a href="producttype.php?type=<?php echo 'Sensitive'?>">
        <p id="sk2">
          I am looking to protect my skin against environmental damage
          (antioxidant support, protect gainst visible signs of aging caused by
          environmental stressors)
        </p></a
      >
      <a href="producttype.php?type=<?php echo 'Acne'?>">
        <p id="sk1">
          I experience signs of congestion (visible shine, enlarged pores,
          blemishes).
        </p></a
      >

      <a href="producttype.php?type=<?php echo 'Normal'?>"
        ><p id="sk1">
          I experience dullness of the skin (lack of radiance or brightness).
        </p></a
      >
      <a href="producttype.php?type=<?php echo 'Dry'?>">
        <p id="sk1">
          I experience signs of dryness (dry patches, feelings of tightness,
          flaking).
        </p></a
      >
      <a href="producttype.php?type=<?php echo 'Normal'?>">
        <p id="sk1">
          I experience signs of aging (fine lines, dynamic lines, coarse
          wrinkles, loose skin, loss of firmness and elasticity).
        </p></a
      >

      <a href="producttype.php?type=<?php echo 'Combination'?>"
        ><p id="sk1">
          I experience textural irregularities (flaking, breakouts, bumps across
          the skin, lack of smoothness).
        </p></a
      >
      <a href="producttype.php?type=<?php echo 'Oily'?>"
        ><p id="sk1">
          I experience uneven skin tone (uneven pigmentation, patches or
          redness).
        </p></a
      >

    </div>
  </body>
</html>
