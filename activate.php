<?php
require 'config.php';

//check to see if the account exists
if (isset($_GET['email'], $_GET['code'])) {
    if ($stmt = $mysqli->prepare('SELECT * FROM `accounts` WHERE `email` = ? AND `activation_code` = ?')) {
        $stmt->bind_param('ss', $_GET['email'], $_GET['code']);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows() > 0) {
            if ($stmt = $mysqli->prepare('UPDATE `accounts` SET `activation_code`= ? WHERE `email` = ? AND `activation_code` = ?')) {
                $new_activation_value = "activated " .date('Y-m-d H:i:s');
                $stmt->bind_param('sss', $new_activation_value, $_GET['email'], $_GET['code']);
                $stmt->execute();
                echo "Your account has been activated...";
                header('Location: login.php');
            }
        }
    }

}
?>
<?= include_css() ?>