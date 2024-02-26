<style>
    <?php include 'stylesheets/styles.scss'; ?>
</style>
<?php





//header funciton
function template_header($title = "Page Title")
{
echo <<<EOT
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <title>$title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" type="text/scss" href="../styles.scss">
    <script defer src="js/bulma.js"></script>
</head>

<body>
EOT;
}


function template_nav($siteTitle = "Flamingo Clean Co"){


echo <<<EOT
<!-- START NAV -->
    <nav class="navbar" role="navigation" aria-label="main navigation" style="background-color: #F78DA7">
        <div class="navbar-brand">
            <a class="navbar-item" href="index.php">
                <span>$siteTitle</span>
            </a>
            

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false"
                data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
            <div class="navbar-end">
                    <div class="nav-links">
                        <a class="nav-link" href="about.php">
                            <strong>About</strong>
                        </a>
                        <p class="nav-link">|</p>
                        <a class="nav-link" href="services.php">
                            <strong>Services</strong>
                        </a>
                        <p class="nav-link">|</p>
                        <a class="nav-link" href="photos.php">
                            <strong>Photos</strong>
                        </a>
                        <p class="nav-link">|</p>
                        <a class="nav-link" href="contact.php">
                            <strong>Contact</strong>
                        </a>
                        <p class="nav-link">|</p>
                        <a class="nav-link" href="blog.php">
                            <strong>Blog</strong>
                        </a>
                        <p class="nav-link">|</p>
                        <a class="nav-link" href="products.php">
                            <strong>Products</strong>
                        </a>
                        <a>
                            <strong>(435) 709-6611</strong>
                        </a>
                    </div>
            </div>
    </nav>
<!-- END NAV -->
<!-- START MAIN -->
<section class="section">
<div class="containter content">
EOT;
}

function template_column_nav() {
    //$current_page = basename($_SERVER['SCRIPT_NAME']);
    ?>
    <!--<div class="column is-one-quarter">
    <aside class="menu">
    <p class="menu-label"> General</p>
    <ul class="menu-list" style="list-style-type: none">
    </ul>
    </aside>
    </div>-->
<?php
}


function template_footer()
{
echo <<<EOT
</div>
</section>
<!-- END MAIN -->
<!-- START FOOTER -->

<footer class="footer" style="background-color: #303633">
<div class="footer-col1">
      <h2 class="foot-head">Flamingo Clean Co.</h2>
      <h4>Hours: 8:00 A.M. - 5:00 P.M.</h4>
    </div>
    <div class="footer-col2">
      <h2 class="foot-head">Navigation</h2>
      <a href="sbout.html" class="footer-links"><h4>About</h4></a>
      <a href="services.html" class="footer-links"><h4>Services</h4></a>
      <a href="photos.html" class="footer-links"><h4>Photos</h4></a>
      <a href="apply.html" class="footer-links"><h4>Apply</h4></a>
      <a href="blog.html" class="footer-links"><h4>Blog</h4></a>
      <a href="products.html" class="footer-links"><h4>Products</h4></a>
    </div>
    <div class="footer-col3">
      <h2 class="foot-head">Contact</h2>
      <h4><strong>Email:</strong></h4>
      <h4>flamingocleanco@gmail.com</h4>

      <h4><strong>Phone Number:</strong></h4>
      <h4>(435) 709-6611</h4>

      <h4>Socials:</h4>
      <div class="social-icons-div">
        <a href="https://www.facebook.com/jake.cottam.14"><i class="bi bi-facebook social-icon"></i></a>
        <a href="https://www.instagram.com/jake_cottam/"><i class="bi bi-instagram social-icon"></i></a>
        <a href="https://www.twitter.com/jake_cottam/"><i class="bi bi-twitter social-icon"></i></a>
      </div>
      
    </div>
    
</footer>
<div class="content has-text-centered copyright">
        <p>
            Copyright 2024 WebWorks ©. All rights Reserved.
        </p>
    </div>
<!-- END FOOTER -->
</body>
</html>
EOT;
}

?>