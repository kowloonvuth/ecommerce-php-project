<?php
session_start();
require_once '/xampp/htdocs/ecommerce-php/Database/conn.php';

$pdo = pdo_connect_mysql();
$session_id = session_id();

// Clear previous cart for this session (optional)
$pdo->prepare("DELETE FROM cart WHERE user_session_id = ?")->execute([$session_id]);

if (!empty($_SESSION['cart'])) {
    $stmt = $pdo->prepare("INSERT INTO cart (user_session_id, product_id, quantity) VALUES (?, ?, ?)");

    foreach ($_SESSION['cart'] as $item) {
        $stmt->execute([$session_id, $item['id'], $item['quantity']]);
    }
}

header("Location: /ecommerce-php/checkout.php");
exit();
