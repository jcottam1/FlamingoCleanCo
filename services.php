<?php
require 'config.php';

//php scripts will go here
session_start();
?>
<?= include_css() ?>
<?= template_header('Services') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron" style="background-image: url('<?php echo "images/hero_images/services.jpg";?>')">
      <!--navbar-->
      
    <div class="hero-text-div">
        <h1 class="hero-title">Services</h1>  
    </div>
</div>
<div class="main-index-section"  style="background-color: #ebe8e8">
    <div class="service-titles">
        <h2 style="color: black">Services</h2>
        <hr style="background-color: black" class="service-title-hr">
    </div>
    <div class="serviceFlex">
    
        <div class="serviceCards">
            <h2>Standard Weekly Cleaning</h2>
            <p>
                Our standard-weekly cleaning service is designed to maintain a clean and fresh 
                environment in your home or commercial property. It includes the following tasks:
            </p>
            <div class="serviceSections">
            <h4>1. Kitchen:</h4>
                <ul>
                    <li>Clean countertops</li>
                    <li>Wipe down sinks and faucets</li>
                    <li>Clean inside of microwave</li>
                    <li>Clean Fronts of appliances</li>
                    <li>Sweep and mop floors</li>
                </ul>
            </div>
            <h4>2. Bathroom</h4>
            <ul>
                <li>Clean mirrors</li>
                <li>Wipe down sinks and faucets</li>
                <li>Sanitize toilets</li>
                <li>Clean showers and tubs</li>
                <li>Sweep and mop floors</li>
            </ul>
            <h4>3. Common Areas:</h4>
            <ul>
                <li>Dust all surfaces</li>
                <li>Wipe down all surfaces</li>
                <li>Vacuum carpets and rugs</li>
                <li>Mop floors</li>
            </ul>
            <p>
                This standard-weekly cleaning package is ideal for maintaining a clean and tidy living or 
                working space on a regular basis. Prices for the standard-weekly cleaning will vary based 
                on square footage and specific cleaning needs.
            </p>
        </div>
        <div class="serviceCards">
            <h2>Spring Cleaning</h2>
            <p>
            Our Spring Cleaning service is a comprehensive deep cleaning designed to refresh your living 
            or working space. It includes the following tasks:
            </p>
            <h4>1. Detailed Dusting</h4>
            <ul>
                <li>Dust baseboards</li>
                <li>Clean ceiling fans</li>
                <li>Wipe down light fixtures and switches</li>
            </ul>
            <h4>2. Cabinet and Drawer Cleaning:</h4>
            <ul>
                <li>Clean the interior and exterior of cabinents and drawers</li>
            </ul>
            <h4>3. Upholstery Cleaning:</h4>
            <ul>
                <li>Clean and tidy up upholstery in common areas</li>
            </ul>
            <h4>4. Blind Cleaning:</h4>
            <ul>
                <li>Dust blinds and window coverings</li>
                <li>Clean ceiling fans</li>
                <li>Wipe down light fixtures and switches</li>
            </ul>
            <h4>5. Extra Bathroom Cleaning:</h4>
            <ul>
                <li>Scrub grout and tiles</li>
                <li>Sanitize all surfaces</li>
            </ul>
            <p>
                Our Spring Cleaning service is perfect for giving your space a fresh start after the winter 
                season or whenever you desire a thorough, top-to-bottom clean. Prices for Spring Cleaning 
                will vary based on square footage and specific cleaning needs.
            </p>
        </div>
        <div class="serviceCards">
            <h2>Office Cleaning</h2>
            <p>
                Our Office Cleaning service is tailored to create a pristine work environment that promotes 
                productivity and professionalism. It includes the following tasks:
            </p>
            <div class="serviceSections">
            <h4>1. General Office Area:</h4>
                <ul>
                    <li>Dust and wipe down all surfaces</li>
                    <li>Clean and disinfect common areas</li>
                    <li>Empty and sanitize trash bins</li>
                    <li>Vacuum carpets and rugs</li>
                    <li>Mop Hard Floors</li>
                </ul>
            </div>
            <h4>2. Kitchen/Break Room:</h4>
            <ul>
                <li>Clean counter tops and sinks</li>
                <li>Wipe down appliances and cabinet exteriors</li>
                <li>Empty and clean refrigerator</li>
            </ul>
            <h4>3. Bathrooms, Windows and Floor Care:</h4>
            <ul>
                <li>Sanitize and disinfect all surfaces</li>
                <li>Clean mirrors and sinks</li>
                <li>Sweep and mop floors</li>
                <li>Scrub and disinfect toilets</li>
            </ul>
            <p>
                Our Office Cleaning service is designed to maintain a clean and organized workspace, ensuring 
                a professional and welcoming atmosphere for your employees and clients. Prices are determined 
                based on the size and specific cleaning requirements of your office space.
            </p>
        </div>
        <div class="serviceCards">
            <h2>Move-Out Cleaning</h2>
            <p>
                Our Move-Out Cleaning service is designed to prepare your property for its next occupants. It 
                includes the following tasks:
            </p>
            <h4>1. Emptying and Cleaning Cabinets:</h4>
            <ul>
                <li>Remove any remaining items</li>
                <li>Clean shelves and wipe down interior</li>
            </ul>
            <h4>2. Oven and Fridge Cleaning:</h4>
            <ul>
                <li>Thoroughly clean the oven and refrigerator, including odor removal</li>
            </ul>
            <h4>3. Wall and Floor Cleaning:</h4>
            <ul>
                <li>Wipe down walls and special attention is paid to floor cleaning</li>
            </ul>
            <h4>4. Baseboard Cleaning:</h4>
            <ul>
                <li>Clean baseboards throughout the property</li>
            </ul>
            <h4>5. Door and Frame Cleaning:</h4>
            <ul>
                <li>Wipe down doors, frames, and handles</li>
            </ul>
            <h4>6. Fixture Cleaning:</h4>
            <ul>
                <li>Clean light fixtures and ceiling fans</li>
            </ul>
            <p>
                Our Move-Out Cleaning service ensures that your property is in pristine condition for its 
                next occupants. Pricing for Move-Out Cleaning depends on the size and condition of the 
                property, ensuring a customized solution for your needs.
            </p>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>