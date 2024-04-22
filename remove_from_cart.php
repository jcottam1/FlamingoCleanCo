<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Check if the cart ID is provided
if(isset($_GET['cart_id'])) {
    $cart_id = $_GET['cart_id'];

    // Delete item from database table
    $query = "DELETE FROM cart WHERE cart_id = ?";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("i", $cart_id);
    $stmt->execute();
    $stmt->close();

    // Redirect back to the cart page
    header('Location: cart.php');
    exit();
} else {
    // Redirect to an error page or handle the error
    echo "Error: Cart ID not provided!";
    exit();
}
?>