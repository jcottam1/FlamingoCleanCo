<?php
require 'config.php';
// Start a new session or resume the existing session
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

?>
<?= include_css() ?>
<?= template_header('Products') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron" style="background-image: url('<?php echo "images/hero_images/ProductsHero.jpg";?>')">
      <!--navbar-->
      
    <div class="hero-text-div">
        <h1 class="hero-title">Products</h1>  
    </div>
</div>
<div class="section-titles">
    <h2">Cleaning Products</h2>
    <hr class="section-title-hr">
</div>
<section class="blog-cards-section">
      <div class="blog-cards">
        <img src="./images/products/Bleach.jpg" alt="Bleach">
        <h3 class="card-header">Clorox Bleach</h3>
        <h4 class="card-info">(1 Gallon) $21</h4>
        <a href="add_to_cart.php?id=1&name=Clorox%20Bleach&price=21"><button class="main-button">Add to Cart</button></a>
      </div>
      <div class="blog-cards">
        <img src="./images/products/ToiletBowlCleaner.PNG" alt="toiletBowlCleaner">
        <h3 class="card-header">Toilet Bowl Cleaner</h3>
        <h4 class="card-info">(32oz) $25</h4>
        <a href="add_to_cart.php?id=2&name=Toilet%20Bowl%20Cleaner&price=25"><button class="main-button">Add to Cart</button></a>
      </div>
      <div class="blog-cards">
        <img src="./images/products/Duster.jpg" alt="duster">
        <h3 class="card-header">Duster</h3>
        <h4 class="card-info">19" $15</h4>
        <a href="add_to_cart.php?id=3&name=Duster&price=15"><button class="main-button">Add to Cart</button></a>
      </div>
      <div class="blog-cards">
        <img src="./images/products/Windex.jpg" alt="windex">
        <h3 class="card-header">Windex Window Cleaner</h3>
        <h4 class="card-info">(32oz) $6</h4>
        <a href="add_to_cart.php?id=4&name=Windex%20Window%20Cleaner&price=6"><button class="main-button">Add to Cart</button></a>
      </div>
      <div class="blog-cards">
        <img src="./images/products/MagicEraser.jpg" alt="magicEraser">
        <h3 class="card-header">Mr. Clean Magic Erasers</h3>
        <h4 class="card-info">(36ct) $59</h4>
        <a href="add_to_cart.php?id=5&name=Mr.%20Clean%20Magic%20Erasers&price=59"><button class="main-button">Add to Cart</button></a>
      </div>
  </section>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>