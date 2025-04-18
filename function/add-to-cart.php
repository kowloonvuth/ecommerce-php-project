<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['product_id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $quantity = $_POST['quantity'];

    // Initialize cart session if not exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if item already in cart
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'title' => $title,
            'price' => $price,
            'img' => $img,
            'quantity' => $quantity
        ];
    }

    header("Location: /ecommerce-php/cart.php");
    exit();
}
