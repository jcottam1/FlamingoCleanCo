<?php
require 'config.php';

session_start();
//php scripts will go here

?>
<?= include_css() ?>
<?= template_header('Blog') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron" style="background-image: url('<?php echo "images/hero_images/Blog.jpg";?>')">
      <!--navbar-->
      
    <div class="hero-text-div">
        <h1 class="hero-title">Blog</h1>  
    </div>
</div>
<div class="section-titles">
    <h2">Blog Posts</h2>
    <hr class="section-title-hr">
</div>
<section class="blog-cards-section">
      <div class="blog-cards">
        <img src="./images/blog_images/housekeeping.jpg" alt="housekeeping">
        <h3 class="card-header">Housekeeping</h3>
        <h4 class="card-info">Floor polishing | clean wood floors | clean lvp floors | clean tile floors</h4>
      </div>
      <div class="blog-cards">
        <img src="./images/blog_images/kitchen_cleaning.jpg" alt="kitchen_cleaning">
        <h3 class="card-header">Kitchen Cleaning</h3>
        <h4 class="card-info">Oven cleaning | clean kitchen | sanitize kitche | sweep floors | mop floors |</h4>
      </div>
      <div class="blog-cards">
        <img src="./images/blog_images/bathroomCleaning.jpg" alt="bathroomCleaning">
        <h3 class="card-header">Spotless Bathrooms</h3>
        <h4 class="card-info">Clean build up on faucets | shine chrome | remove toilet staining | polish shower doors</h4>
      </div>
      <div class="blog-cards">
        <img src="./images/blog_images/organization.jpg" alt="organization">
        <h3 class="card-header">Organization</h3>
        <h4 class="card-info">Closet organization | pantry organization | room organization | drawer organization | room organization</h4>
      </div>
      <div class="blog-cards">
        <img src="./images/blog_images/move_inout.jpg" alt="move_inout">
        <h3 class="card-header">Move in Cleaning | Move Out Cleaning</h3>
        <h4 class="card-info">Move in clean | move out clean | One time clean | Monthly cleaning</h4>
      </div>
  </section>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>