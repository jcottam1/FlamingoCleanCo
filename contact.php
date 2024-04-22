<?php
require 'config.php';

session_start();
//php scripts will go here

?>
<?= include_css() ?>
<?= template_header('Contact Us') ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<div class="jumbotron" id="jumbotron"
    style="background-size: 100%; background-image: url('<?php echo "images/hero_images/phone.jpg"; ?>')">
    <!--navbar-->

    <div class="hero-text-div">
        <h1 class="hero-title">Contact Us</h1>
    </div>
</div>

<section class="socials-section" style="background-image: url('/images/socials-image.jpg')">
    <div class="contact-socials">
        <div class="socail-div">
            <h4><strong>Email:</strong></h4>
            <p class="socials-smaller-text">jakecottam1@gmail.com</p>
        </div>
        <div class="socail-div">
            <h4><strong>Phone Number:</strong></h4>
            <p class="socials-smaller-text">(208) 969-1056</p>
        </div>
        <div class="socail-div">
            <h4><strong>Socials:</strong></h4>
            <div class="social-icons-div">
                <a href="https://www.facebook.com/people/Flamingo-Clean-Co/61552216833933/"><i
                        class="bi bi-facebook social-icon"></i></a>
                <a href="https://www.instagram.com/jake_cottam/"><i class="bi bi-instagram social-icon"></i></a>
            </div>
        </div>
    </div>
</section>
<div class="message-section">
    <div class="section-titles">
        <h2>Send us a Message!</h2>
        <hr class="section-title-hr">
    </div>
    <div class="message-form">
        <form action="send_email.php" method="POST">
            <div class="name-email-phone-address">
                <div class="name-phone">
                    <div class="name">
                        <label>Name:</label>
                        <input type="text" name="username" placeholder="Name" required>
                    </div>
                    <div class="email">
                        <label>Phone Number:</label>
                        <input type="tel" name="phoneNumber" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="email-address">
                    <div class="email">
                        <label>Email:</label>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="email">
                        <label>Address:</label>
                        <input type="text" name="address" placeholder="Address" required>
                    </div>
                </div>
            </div>
            <div class="message">
                <label>Your Message:</label>
                <textarea name="message" placeholder="Type your message here"></textarea>
            </div>
            <button type="submit" class="main-button message-button">Send Message</button>
        </form>
    </div>
</div>
<div class="section-titles">
    <h2 class="section-titles">Apply</h2>
    <hr class="section-title-hr">
</div>
<div class="apply-section">
    <h2 class="title">About Flamingo Clean Co:</h2>
    <p>
        At Flamingo Clean Co, we take pride in being more than just a cleaning company.
        We are dedicated to building strong, long-lasting relationships with both our
        clients and our cleaning team. Our unique approach values efficiency, fairness,
        and respect in every aspect of our business.
    </p>
    <br>
    <h2 class="title">Why Choose Flamingo Clean Co:</h2>
    <li>
        We charge by the job, not by the hour, ensuring fairness for both our clients
        and our cleaners.
    </li>
    <li>
        Our employees receive a generous percentage of the profits, providing one of the
        best compensation packages in the industry.
    </li>
    <li>
        We believe in recognizing hard work, and after six months, you can expect a
        performance-based raise.
    </li>
    <li>
        Joining our team means becoming a part of the Flamingo Clean Co family, where you’ll
        have opportunities for growth and a supportive work environment.
    </li>
    <br>
    <h2 class="title">Job Opening: Cleaning Professional</h2>
    <br>
    <h2 class="title">Responsibilities:</h2>
    <li>
        Perform cleaning tasks at various locations, including one-time, first-time, move-out,
        and regular client cleanings.
    </li>
    <li>
        Maintain a high standard of cleanliness and attention to detail.
    </li>
    <li>
        Accommodate client needs with a positive attitude.
    </li>
    <li>
        Adhere to Flamingo Clean Co’s standards of trustworthiness, reliability, and
        professionalism.
    </li>
    <br>
    <br>
    <h2 class="title">Qualifications:</h2>
    <li>
        Trustworthy and reliable.
    </li>
    <li>
        Hardworking and dedicated.
    </li>
    <li>
        Willingness to accommodate client needs.
    </li>
    <li>
        Positive attitude and a passion for cleaning.
    </li>
    <li>
        Attention to detail with an inclination toward cleanliness.
    </li>
    <li>
        Own reliable transportation (vehicle) for commuting to various locations.
    </li>
    <br>
    <br>
    <h2 class="title">Additional Information:</h2>
    <li>
        You are responsible for your own vehicle and associated travel expenses.
    </li>
    <li>
        Clients are scheduled based on neighborhood convenience.
    </li>
    <li>
        Experience is helpful but not mandatory; we provide a mandatory 2-4 week paid
        training/trial period based on your efficiency and reliability.
    </li>
    <li>
        Interviews and training are held in South Salt Lake.
    </li>
    <br>
    <br>
    <h2 class="title">How to Apply</h2>
    <p>
        If you’re ready to join the Flamingo Clean Co family, please send us your resume
        and professional references via email. For inquiries or questions regarding this
        opportunity, feel free to call us. We look forward to hearing from you and finding
        the perfect fit for our team.
    </p>
    <br>
    <strong><h4>Email: flamingocleanco@gmail.com</h4></strong>
    <br>
    <strong><h4>Phone Number: (435) 709-6611</h4></strong>
</div>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>