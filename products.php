<html lang="en">
<head>
    <?php include "imports.php"; ?>
    <title>Products</title>
    <style>
    .categories-menu-all {
      font-weight: bold;
      color: #1e88e5;
    }
    .footer {
	     width: 100% !important;
	     position: relative !important;
	     margin-top: 67em !important;
     }
    </style>
</head>
<body>
  <?php session_start();

  if(!isset($_SESSION["cusername"]))
  {
  	  include "header-logged-out.php";
  }else {
      include "header-logged-in.php";
  }
  ?>

  <div class="product">
    <div class="product-contents">
      <div class="product-filter">
        <div class="filter-content">
          <form class="filter-form" action="productsTest.php" method="get">
                  	  <legend class="filter-heading">Filter</legend>

                      <label class="filter-type" for="search">Search:</label><br>
                  	  <input type="text" class="search" name="search" id="search" placeholder="Search Products"><br><br>

                      <label class="filter-type">Categories:</label><br>
                      <input type="radio" name="categories" id="shirts">
                      <label class="opt" for="shirts">Shirts</label><br>
                      <input type="radio" name="categories" id="pants">
                      <label class="opt" for="pants">Pants</label><br>
                      <input type="radio" name="categories" id="blouses">
                      <label class="opt" for="blouses">Blouses</label><br>
                      <input type="radio" name="categories" id="skirts">
                      <label class="opt" for="skirts">Skirts</label><br>
                      <input type="radio" name="categories" id="accessories">
                      <label class="opt" for="accessories">Accessories</label><br>

                      <input type="radio" name="categories" id="trouser">
                      <label class="opt" for="trouser">Trouser</label><br>

                      <br><br>

                      <label class="filter-type">Price:</label><br>
                      <input type="text" class="filter-price" name="min-price" id="min-price" placeholder="Min"> <b class="filter-line"> - </b>
                      <input type="text" class="filter-price" name="max-price" id="max-price" placeholder="Max"><br><br><br><br>

                      <input class="filter-button" type="submit" value="Find My Match">
              </form>
        </div>
      </div>

      <?php
      $con = mysqli_connect("localhost","root","","vivo");
      if(!$con)
      {
      die("Cannot connect to DB server");
      }
      $sql ="SELECT * FROM `product`";

      $result = mysqli_query($con,$sql);

      echo "<div class='product-grid'><table>";
      $games = 0;
      if(mysqli_num_rows($result)> 0)
      {
      while($row = mysqli_fetch_assoc($result)){
         // make a new row after 3 games
         if($games%5 == 0) {
            if($games > 0) {
               // and only close it if it's not the first game
               echo '</tr>';
            }
            echo '<tr>';
         }
         $pid=$row['pid'];
         $title=$row['ptitle'];
         $price=$row['pprice'];
         $image=$row['pimg'];
         ?>
         <td>
         <a class="product-link" href="https://localhost/vivo/single.php?id=<?php echo $pid; ?>">
          <img class="product-image" src="<?php echo $image; ?>" />
          <p class="product-title"><?php echo $title; ?></p>
          <p class="product-price"><?php echo $price; ?></p>
         </a>
         <br />
         </td>
         <?php
         $games++; // increment the $games element so we know how many games we've already processed
      }
    }
      ?>
      </table>
    </div>
    </div>
  </div>
  <?php require "footer.php"; ?>
</body>
</html>
