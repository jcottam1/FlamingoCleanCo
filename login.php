<?php
require 'config.php';

session_start();
// Initialize an array to hold user responses
$userResponses = array();

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
<?php if (!empty($userResponses)) : ?>
    <p class="notification is-danger is-light">
        <?php echo implode('<br>', $userResponses); ?>
    </p>
<?php endif; ?>
<h1 class="title">Login</h1>
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
        <p class="control">
            <button class="button is-success">
                Login
            </button>
        </p>
    </div>
</form>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>