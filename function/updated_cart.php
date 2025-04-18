<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['product_id'];
    $action = $_POST['action'];

    if (isset($_SESSION['cart'][$id])) {
        if ($action === 'increase') {
            $_SESSION['cart'][$id]['quantity'] += 1;
        } elseif ($action === 'decrease') {
            $_SESSION['cart'][$id]['quantity'] -= 1;

            // Remove product if quantity falls below 1
            if ($_SESSION['cart'][$id]['quantity'] < 1) {
                unset($_SESSION['cart'][$id]);
            }
        }
    }
}

header("Location: /ecommerce-php/cart.php");
exit();
