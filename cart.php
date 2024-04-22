<?php
session_start();
require 'config.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}

// Retrieve cart items from database
$user_id = $_SESSION['id']; // Assuming you have user ID stored in session
$query = "SELECT * FROM cart WHERE user_id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

// Display cart contents
?>
<?= include_css() ?>
<?= template_header("Cart") ?>
<?= template_nav() ?>

<div class="container">
    <h1 class="title">Cart</h1>

    <?php if($result->num_rows > 0): ?>
    <table>
        <tr><th>Product</th><th>Price</th><th>Action</th></tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['product_name'] ?></td>
            <td>$<?= $row['product_price'] ?></td>
            <td><a href='remove_from_cart.php?cart_id=<?= $row['cart_id'] ?>'>Remove</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <?php else: ?>
    <p>Your cart is empty!</p>
    <?php endif; ?>
</div>
<?= template_footer() ?>