<?php
require 'config.php';

session_start();
//php scripts will go here

?>
<?= include_css() ?>
<?= template_header('About Us') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron" style="background-image: url('<?php echo "images/hero_images/About.jpg";?>')">
      <!--navbar-->
      
    <div class="hero-text-div">
        <h1 class="hero-title">About Us</h1>  
    </div>
</div>
<div class="about-main">
    <div>
        <img src="./images/Flamingo-Logo.jpg" alt="Flamingo-Logo" class="aboutLogo">
    </div>
    <div class="about-main-text">
        <h2 class="title">About Our Cleaning Company:</h1>
        <p>
            We are a premier residential and commercial cleaning company dedicated to delivering 
            professional, cost-effective, and outstanding cleaning services. Our team comprises 
            diligent, trustworthy, and friendly cleaners who take pride in their work.
        </p>
        <br>
        <h2 class="title">Our Philosophy:</h1>
        <p>
            At our cleaning company, we firmly believe in turning disorder into beauty, recognizing 
            that a clean environment plays a vital role in reducing stress. Our cleaners are more 
            than just employees; they are integral members of our team. With extensive industry 
            experience, our owner has personally trained our team to meet our rigorous standards.
        </p>
        <br>
        <h2 class="title">Empowerment and Compensation:</h1>
        <p>
            Our unique approach allows our cleaners to set their own work pace and schedules, all while 
            receiving competitive compensation in the cleaning industry. We highly value each team 
            member and foster a culture of respect, collaboration, and unity.
        </p>
        <br>
        <h2 class="title">Our Passion for Cleaning:</h1>
        <p>
            Cleaning is not just a job; it’s our passion. We treat our clients’ spaces with the same care 
            and attention as we would our own homes and loved ones. As a company, we are dedicated to 
            upholding the principles of top-quality service, experience, and unwavering integrity in 
            the field of cleaning, always delivered with a warm smile.
        </p>
        <br>
        <br>
        <p>
            At our cleaning company, we stand as a symbol of trust, excellence, and dedicated service. 
            Join us in making spaces shine, one cleaning at a time.
        </p>
    </div>
</div>
    
<!-- END PAGE CONTENT -->

<?= template_footer() ?>