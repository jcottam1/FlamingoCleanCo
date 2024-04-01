<?php
require 'config.php';

//php scripts will go here
session_start();
?>
<?= include_css() ?>
<?= template_header('Photos') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron" style="background-image: url('<?php echo "images/hero_images/BeforeAfter.jpg";?>')">
      <!--navbar-->
      
    <div class="hero-text-div">
        <h1 class="hero-title">Photos</h1>  
    </div>
</div>
<div class="section-titles">
    <h2">Before and After Photos</h2>
    <hr class="section-title-hr">
</div>
<div class="before-after">
    <div class="before-after-col1">
        <img src="./images/before_after_photos/Toilet.PNG" alt="Toilet" class="Photos">
        <img src="./images/before_after_photos/Oven2.PNG" alt="Oven2" class="Photos">
    </div>
    <div class="before-after-col2">
        <img src="./images/before_after_photos/Stove.PNG" alt="Stove" class="Photos">
        <img src="./images/before_after_photos/Sink.PNG" alt="Sink" class="Photos">
        <img src="./images/before_after_photos/Bathtub.PNG" alt="Bathtub" class="Photos">
    </div>
</div>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>