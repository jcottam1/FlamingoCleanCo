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
    <h1 class="title">Hello world!</h1>
    <p>This is a paragraph...</p>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>