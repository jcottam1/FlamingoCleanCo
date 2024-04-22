<?php
session_start();
require 'config.php'; 

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Check if the product ID, name, and price are provided
if(isset($_GET['id']) && isset($_GET['name']) && isset($_GET['price'])) {
    $user_id = $_SESSION['id']; // Assuming you have user ID stored in session
    $product_id = $_GET['id'];
    $product_name = $_GET['name'];
    $product_price = $_GET['price'];

    // Insert item into database table
    $query = "INSERT INTO cart (user_id, product_id, product_name, product_price) VALUES (?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param("iiss", $user_id, $product_id, $product_name, $product_price);
    $stmt->execute();
    $stmt->close();

    // Redirect back to the products page or to the cart page
    header('Location: products.php');
    exit();
} else {
    // Redirect to an error page or handle the error
    echo "Error: Product information not provided!";
    exit();
}
?>