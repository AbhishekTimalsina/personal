<?php  include "config/database.php" ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css"/>
  </head>
  <body>

<?php

?>
    <header <?php echo basename($_SERVER['PHP_SELF'],".php")=="relax"?"class='fixed'":null;?>>
      <section class="section-navbar">
        <div class="nav-container">
          <div class="logo-container pad-lft">
            <div class="logo">
              <a href="index.php"><img src="img/logo.png" /></a>
            </div>
          </div>
          <div class="nav-right pad-rt">
            <ul class="nav-list">
              <a class="nav-link-container" href="index.php#book-section"> <li class="nav-link">Books i have read</li></a>
              <a class="nav-link-container" href="index.php#section-hobby"> <li class="nav-link">Hobby</li></a>
              <a class="nav-link-container" href="blog.php"> <li class="nav-link">Book Summary</li></a>
              <a class="nav-link-container" href="relax.php"> <li class="nav-link">Relax</li></a>
            </ul>
          </div>
        </div>
        <div class="x-container">
<img src="img/hamburger-icon.png" alt="hamburger icon" open class="temp-d">
          <img src="img/x-icon.png" alt="close icon" inv class="d-none"> 
        </div>
      </section>
    </header>