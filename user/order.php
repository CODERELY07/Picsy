<?php
session_start();
include('../includes/db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $photo_id = $_POST['photo_id'];
    $quantity = $_POST['quantity'];

    // Get photo price
    $stmt = $pdo->prepare("SELECT price FROM photos WHERE photo_id = ?");
    $stmt->execute([$photo_id]);
    $photo = $stmt->fetch();
    $price = $photo['price'];

    // Insert order
    $stmt = $pdo->prepare("INSERT INTO orders (user_id, total_price) VALUES (?, ?)");
    $stmt->execute([$user_id, $price * $quantity]);

    // Insert order details
    $order_id = $pdo->lastInsertId();
    $stmt = $pdo->prepare("INSERT INTO order_details (order_id, photo_id, quantity, price) VALUES (?, ?, ?, ?)");
    $stmt->execute([$order_id, $photo_id, $quantity, $price]);

    echo "Order placed successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="orderForm">
    Photo ID: <input type="number" name="photo_id" required><br>
    Quantity: <input type="number" name="quantity" required><br>
    <button type="submit">Place Order</button>
</form>

<div id="orderStatus"></div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=""></script>
<script src="./../assets/js/main.js"></script>
</body>
</html>