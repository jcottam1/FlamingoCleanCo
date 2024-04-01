<?php
require 'config.php';

//php scripts will go here
session_start();

//password protect this (or any) page
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// get the user profile info
$stmt = $mysqli->prepare('SELECT `password`, `email` FROM `accounts` WHERE `id` = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($hash, $email);
$stmt->fetch();
$stmt->close();
?>
<?= include_css() ?>
<?= template_header("Profile") ?>
<?= template_nav() ?>

<!-- START PAGE CONTENT -->
<?php if ($userResponses) : ?>
    <p class="notification is-danger is-light">
        <?php echo implode('<br>', $userResponses);
        //var_dump($_POST);
        ?>
    </p>
<?php endif; ?>

<div class="columns">
    <!-- START LEFT NAV COLUMN-->
    <!-- END LEFT NAV COLUMN-->
    <!-- START RIGHT CONTENT COLUMN-->
    <div class="column">
        <h1 class="title">Profile</h1>
        <table>
            <tr>
                <td>Username:</td>
                <td><?= $_SESSION['username'] ?></td>
            </tr>
            <tr>
                <td>Password Hash:</td>
                <td><?= $hash ?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?= $email ?></td>
            </tr>
        </table>
    </div>
    <!-- END RIGHT CONTENT COLUMN-->
</div>
<!-- END PAGE CONTENT -->

<?= template_footer() ?>