<?php
$server = "127.0.0.1"; // Your server name or IP
$username = "web4800"; // Your MySQL username
$password = "W3b4800!"; // Your MySQL password
$database = "web4800"; // Your database name


// Create connection
$mysqli = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

function pdo_connect_mysql() {
    $server = "127.0.0.1"; // Your server name or IP
    $username = "web4800"; // Your MySQL username
    $password = "W3b4800!"; // Your MySQL password
    $database = "web4800"; // Your database name

    try {
        return new PDO (
            'mysql:host=' . $server . 
            ';dbname=' . $database .
            ';charset=utf8', $username, $password
        );

    } catch (PDOException $exception) {
        die("PDO failed to connect to the database: $exception");
    }
}

//create an userResponses array
$userResponses = [];

//import scss files



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/scss" href="../stylesheets/styles.scss">
    <script defer src="js/bulma.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
EOT;
}


function template_nav($siteTitle = "Flamingo Clean Co")
{
    $logInOutLink = '';

    if (isset($_SESSION['loggedin'])) {
        $logInOutLink = 'out';
        $cartLink = '<a class="nav-link" href="cart.php"><i class="bi bi-cart-fill"></i> Cart</a>';
    } else {
        $logInOutLink = 'in';
        $cartLink = '';
    }


    echo <<<EOT
<!-- START NAV -->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="./images/Flamingo-Logo.jpg" alt="Flamingo-Logo" class="navFlamingo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div class="navbar-nav">
                    <a class="nav-link" href="about.php">About</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="services.php">Services</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="photos.php">Photos</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="contact.php">Contact</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="blog.php">Blog</a>
                    <hr class="nav-hr">
                    <a class="nav-link" href="products.php">Products</a>
                    <br class="nav-hr">
                    $cartLink
                    <div class="buttons">
                    <a href="log$logInOutLink.php" class="button is-light">
                        <span class="icon">
                            <i class="fas fa-sign-$logInOutLink-alt"></i>
                        </span>
                        <span>Log$logInOutLink</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- END NAV -->
<!-- START MAIN -->

EOT;
}




function template_footer()
{
    echo <<<EOT

<!-- END MAIN -->
<!-- START FOOTER -->

<footer class="footer" style="background-color: #303633">
<div class="footer-col1">
      <h2 class="foot-head">Flamingo Clean Co.</h2>
      <h4>Hours: </h4>
      <h4>8:00 A.M. - 5:00 P.M.</h4>
    </div>
    <div class="footer-col2">
      <h2 class="foot-head">Navigation</h2>
      <a href="about.php" class="footer-links"><h4>About</h4></a>
      <a href="services.php" class="footer-links"><h4>Services</h4></a>
      <a href="photos.php" class="footer-links"><h4>Photos</h4></a>
      <a href="contact.php" class="footer-links"><h4>Apply</h4></a>
      <a href="blog.php" class="footer-links"><h4>Blog</h4></a>
      <a href="products.php" class="footer-links"><h4>Products</h4></a>
    </div>
    <div class="footer-col3">
      <h2 class="foot-head">Contact</h2>
      <h4><strong>Email:</strong></h4>
      <h4>flamingocleanco@gmail.com</h4>

      <h4><strong>Phone Number:</strong></h4>
      <h4>(435) 709-6611</h4>

      <h4>Socials:</h4>
      <div class="social-icons-div">
        <a href="https://www.facebook.com/people/Flamingo-Clean-Co/61552216833933/" target="_blank"><i class="bi bi-facebook social-icon"></i></a>
        <a href="https://www.instagram.com/"><i class="bi bi-instagram social-icon"></i></a>
        <a href="https://www.twitter.com/"><i class="bi bi-twitter social-icon"></i></a>
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

function include_css() {
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/message.css">';
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/footer.css">';
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/global.css">';
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/index.css">';
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/navbar.css">';
    echo '<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">';
}
?>