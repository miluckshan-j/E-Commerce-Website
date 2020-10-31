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
	     margin-top: 103em !important;
     }
    </style>
</head>
<body>
  <?php include "header-logged-in.php"; ?>

  <div class="product">
    <div class="product-contents">
      <div class="product-filter">
        <div class="filter-content">
          <form class="filter-form">
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

                      <label class="filter-type">Color:</label><br>
                      <input type="radio" name="color" id="white">
                      <label class="opt" for="white">White</label><br>
                      <input type="radio" name="color" id="black">
                      <label class="opt" for="black">Black</label><br>
                      <input type="radio" name="color" id="grey">
                      <label class="opt" for="grey">Grey</label><br>
                      <input type="radio" name="color" id="red">
                      <label class="opt" for="red">Red</label><br>
                      <input type="radio" name="color" id="yellow">
                      <label class="opt" for="yellow">Yellow</label><br>
                      <input type="radio" name="color" id="green">
                      <label class="opt" for="green" >Green</label><br>
                      <input type="radio" name="color" id="blue">
                      <label class="opt" for="blue">Blue</label><br>
                      <input type="radio" name="color" id="purple">
                      <label class="opt" for="purple">Purple</label><br>
                      <input type="radio" name="color" id="pink">
                      <label class="opt" for="pink">Pink</label><br><br>

                      <label class="filter-type">Price:</label><br>
                      <input type="text" class="filter-price" name="min-price" id="min-price" placeholder="Min"> <b class="filter-line"> - </b>
                      <input type="text" class="filter-price" name="max-price" id="max-price" placeholder="Max"><br><br><br><br>

                      <input class="filter-button" type="submit" value="Find My Match">
              </form>
        </div>
      </div>
      <div class="product-list">
        <!--ROW1-->
        <div class="product-row">
          <div class="product-column">
            <a class="product-link" href="https://localhost/vivo/single.php">
            <img class="product-image" src="resources/images/P12.jpg">
            <p class="product-title">Double Flair Short Dress</p>
            <p class="product-price">LKR 2190</p>
          </a>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P8.jpg">
            <p class="product-title">White Mens' T-Shirt</p>
            <p class="product-price">LKR 1690</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P3.jpg">
            <p class="product-title">Front Slit Chambray Kurta</p>
            <p class="product-price">LKR 2990</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P4.jpg">
            <p class="product-title">Stripe Womens' T-shirt</p>
            <p class="product-price">LKR 790</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P6.jpg">
            <p class="product-title">Checked Mens' T-Shirt</p>
            <p class="product-price">LKR 1990</p>
          </div>
        </div>
        <!--ROW2-->
        <div class="product-row">
          <div class="product-column">
            <img class="product-image" src="resources/images/P1.jpg">
            <p class="product-title">I am’ Purple Bangle</p>
            <p class="product-price">LKR 590</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P2.jpg">
            <p class="product-title">'92 Mens' T-Shirt</p>
            <p class="product-price">LKR 1690</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P5.jpg">
            <p class="product-title">Blue Bead Bangle</p>
            <p class="product-price">LKR 590</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P7.jpg">
            <p class="product-title">Stripe Combo T-shirt</p>
            <p class="product-price">LKR 790</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P9.jpg">
            <p class="product-title">Checked T-Shirt</p>
            <p class="product-price">LKR 1990</p>
          </div>
        </div>
        <!--ROW3-->
        <div class="product-row">
          <div class="product-column">
            <img class="product-image" src="resources/images/P10.jpg">
            <p class="product-title">Double Flair Short Dress</p>
            <p class="product-price">LKR 2190</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P11.jpg">
            <p class="product-title">White T-Shirt</p>
            <p class="product-price">LKR 1690</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P3.jpg">
            <p class="product-title">Front Slit Chambray Kurta</p>
            <p class="product-price">LKR 2990</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P4.jpg">
            <p class="product-title">Stripe Combo T-shirt</p>
            <p class="product-price">LKR 790</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P6.jpg">
            <p class="product-title">Checked T-Shirt</p>
            <p class="product-price">LKR 1990</p>
          </div>
        </div>
        <!--ROW4-->
        <div class="product-row">
          <div class="product-column">
            <img class="product-image" src="resources/images/P12.jpg">
            <p class="product-title">Double Flair Short Dress</p>
            <p class="product-price">LKR 2190</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P8.jpg">
            <p class="product-title">White T-Shirt</p>
            <p class="product-price">LKR 1690</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P3.jpg">
            <p class="product-title">Front Slit Chambray Kurta</p>
            <p class="product-price">LKR 2990</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P4.jpg">
            <p class="product-title">Stripe Combo T-shirt</p>
            <p class="product-price">LKR 790</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P6.jpg">
            <p class="product-title">Checked T-Shirt</p>
            <p class="product-price">LKR 1990</p>
          </div>
        </div>
        <!--ROW5--><!--
        <div class="product-row">
          <div class="product-column">
            <img class="product-image" src="resources/images/P12.jpg">
            <p class="product-title">Double Flair Short Dress</p>
            <p class="product-price">LKR 2190</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P8.jpg">
            <p class="product-title">White T-Shirt</p>
            <p class="product-price">LKR 1690</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P3.jpg">
            <p class="product-title">Front Slit Chambray Kurta</p>
            <p class="product-price">LKR 2990</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P4.jpg">
            <p class="product-title">Stripe Combo T-shirt</p>
            <p class="product-price">LKR 790</p>
          </div>
          <div class="product-column">
            <img class="product-image" src="resources/images/P6.jpg">
            <p class="product-title">Checked T-Shirt</p>
            <p class="product-price">LKR 1990</p>
          </div>
        </div>-->
      </div>
    </div>
  </div>
  <?php require "footer.php"; ?>
</body>
</html>
