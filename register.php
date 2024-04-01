<?php
require 'config.php';

//check to see if all the data from our form is set
if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    //var_dump($_POST);
    //use the database connection & prepare an sql statement
    if ($stmt = $mysqli->prepare('SELECT `id`, `username`, `password` FROM `accounts` WHERE `username` = ?')) {
        // bind our params
        // data types: i = integer, s = string, d = double, b = blob
        $stmt->bind_param('s', $_POST['username']);
        //run the query
        $stmt->execute();
        //store the result
        $stmt->store_result();
        if ($stmt->num_rows() > 0) {
            $userResponses[] = 'The username already exists, please choose another...';
        } else {
            //create the new user record
            if ($stmt = $mysqli->prepare('INSERT INTO `accounts`(`username`, `password`, `email`, `activation_code`) VALUES (?, ?, ?, ?)')) {
                //Never expose your passwords in your database
                // use the php password_hash function
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                // generate a unique id for the activation code
                $activationCode = uniqid();
                //bind the data to our prepared statement
                $stmt->bind_param('ssss', $_POST['username'], $hash, $_POST['email'], $activationCode);
                //$stmt->execute();

                //This is where we would send an email to the user but coneanywhere does not let us
                //instead we are going to create a confirmation ink to display on the page for the user to click
                if ($stmt->execute()) {
                    $userResponses[] = "Your account was created <a href='activate.php?email=" . $_POST['email'] . "&code=$activationCode'>click to activate</a>";
                } else {
                    $userResponses[] = "Your account was not created...try again";
                }
                
            }
        }
    } else {
        //something went wrong with our select sql statement
        $userResponse[] = 'Could not prepare the SELECT statement';
    }
}

?>
<?= include_css() ?>
<?= template_header("Register") ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<?php if ($userResponses) : ?>
    <p class="notification is-danger is-light">
        <?php echo implode('<br>', $userResponses);
        //var_dump($_POST);
        ?>
    </p>
<?php endif; ?>
<h1 class="title">Register</h1>
<form action="" method="post">
    <div class="field">
        <label class="label">Username</label>
        <div class="control has-icons-left">
            <input name="username" class="input" type="text" placeholder="Enter your username" required>
            <span class="icon is-small is-left">
                <i class="fas fa-user"></i>
            </span>
        </div>
    </div>
    <div class="field">
        <label class="label">Password</label>
        <p class="control has-icons-left">
            <input name="password" class="input" type="password" placeholder="Password" required>
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
        </p>
    </div>
    <div class="field">
        <label class="label">Email</label>
        <p class="control has-icons-left">
            <input name="email" class="input" type="email" placeholder="Email" required>
            <span class="icon is-small is-left">
                <i class="fas fa-envelope"></i>
            </span>
        </p>
    </div>
    <div class="field">
        <p class="control">
            <button class="button is-success">
                Register
            </button>
        </p>
    </div>
</form>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>