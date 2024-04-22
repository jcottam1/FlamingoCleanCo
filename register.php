<?php
require 'config.php';

$userResponses = array(); // Initialize array for both success and danger messages

if (isset($_POST['username'], $_POST['password'], $_POST['email'])) {
    if ($stmt = $mysqli->prepare('SELECT `id`, `username`, `password` FROM `accounts` WHERE `username` = ?')) {
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() > 0) {
            $userResponses[] = 'The username already exists, please choose another...';
        } else {
            if ($stmt = $mysqli->prepare('INSERT INTO `accounts`(`username`, `password`, `email`, `activation_code`) VALUES (?, ?, ?, ?)')) {
                $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $activationCode = uniqid();
                $stmt->bind_param('ssss', $_POST['username'], $hash, $_POST['email'], $activationCode);
                if ($stmt->execute()) {
                    $userResponses[] = "Your account was created <a href='activate.php?email=" . $_POST['email'] . "&code=$activationCode'>click to activate</a>";
                } else {
                    $userResponses[] = "Your account was not created...try again";
                }
            }
        }
    } else {
        $userResponses[] = 'Could not prepare the SELECT statement';
    }
}
?>
<?= include_css() ?>
<?= template_header("Register") ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<?php if (!empty($userResponses)) : ?>
    <div class="alert alert-<?php echo (strpos($userResponses[0], 'created') !== false) ? 'success' : 'danger'; ?>" role="alert">
        <?php echo implode('<br>', $userResponses); ?>
    </div>
<?php endif; ?>
<br>
<br>
<h1 class="title text-center">Register</h1>
<form action="" method="post" style="background-color: white">
    <div class="field col-sm-3">
        <strong><label class="label  col-form-label-lg">Username</label></strong>
        <div class="control has-icons-left form-outline mb-4">
            <input name="username" class="input form-control" type="text" placeholder="Enter your username" required>
        </div>
    </div>
    <div class="field col-sm-3">
        <strong><label class="label col-form-label-lg">Password</label></strong>
        <p class="control has-icons-left form-outline mb-4">
            <input name="password" class="input form-control" type="password" placeholder="Password" required>
        </p>
    </div>
    <div class="field col-sm-3">
        <strong><label class="label col-form-label-lg">Email</label></strong>
        <p class="control has-icons-left">
            <input name="email" class="input form-control" type="email" placeholder="Email" required>
        </p>
    </div>
    <br>
    <div class="field register-login-button col-sm-3">
        <p class="control">
            <button class="btn btn-primary btn-block mb-4 btn-lg">
                Register
            </button>
        </p>
    </div>
</form>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>