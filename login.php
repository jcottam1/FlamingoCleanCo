<?php
require 'config.php';

session_start();
// Initialize arrays to hold user responses
$userResponses = array();
$successMessages = array();

// PHP scripts will go here
if (isset($_POST['username'], $_POST['password'])) {
    if ($stmt = $mysqli->prepare('SELECT `id`, `password` FROM `accounts` WHERE `username` = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows() > 0) {
            $stmt->bind_result($id, $hash);
            $stmt->fetch();

            if (password_verify($_POST['password'], $hash)) {
                // Create the user session
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['id'] = $id;
                // Set success message
                $successMessages[] = 'Login successful.';
                header('Location: index.php');
                // Regenerate session ID if a session exists
                if (session_status() == PHP_SESSION_ACTIVE) {
                    session_regenerate_id();
                }
            } else {
                $userResponses[] = 'Incorrect password.';
            }
        } else {
            $userResponses[] = 'Incorrect username.';
        }
    } else {
        $userResponses[] = 'Could not prepare the SQL statement';
    }
}
?>
<?= include_css() ?>
<?= template_header("Login") ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<?php if (!empty($userResponses)): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo implode('<br>', $userResponses); ?>
    </div>
<?php endif; ?>
<?php if (!empty($successMessages)): ?>
    <div class="alert alert-success" role="alert">
        <?php echo implode('<br>', $successMessages); ?>
    </div>
<?php endif; ?>
<br>
<br>
<h1 class="title text-center">Login</h1>
<form action="" method="post" class="form-box" style="background-color: white">
    <div class="field col-sm-3">
        <strong><label class="label col-form-label-lg">Username</label></strong>
        <div class="control has-icons-left form-outline mb-4">
            <input name="username" class="input form-control" type="text" placeholder="Enter your username" required>

        </div>
    </div>
    <div class="field col-sm-3">
        <strong><label class="label col-form-label-lg">Password</label></strong>
        <div class="control has-icons-left form-outline mb-4">
            <input name="password" class="input form-control" type="password" placeholder="Enter your password" required>
        </div>
    </div>
    <br>
    <div class="field register-login-button col-sm-3">
        <p class="control">
            <button class="btn btn-primary btn-block mb-4 btn-lg">
                Sign In
            </button>
        </p>
    </div>
    <br>
    <div class="text-center">
        <h5 class="register-button text-center">Don't have an account? Register and account <a href="register.php">here.</a></h5>
    </div>
</form>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>