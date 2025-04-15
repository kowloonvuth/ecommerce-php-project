<?php
session_start();

// Use absolute path with __DIR__
include '/xampp/htdocs/ecommerce-php/Database/conn.php';

header('Content-Type: application/json');

try {
    $pdo = pdo_connect_mysql();
    $data = json_decode(file_get_contents('php://input'), true);

    if (!isset($data['product_id'])) {
        throw new Exception('No product ID received');
    }

    $product_id = (int)$data['product_id'];
    $session_id = session_id();

    // Fetch product from database
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        throw new Exception('Product not found');
    }

    // Chech if product already in cart

    $stmt = $pdo->prepare("SELECT cart_id, quantity FROM cart WHERE product_id = ? AND user_session_id = ?");
    $stmt->execute([$product_id, $session_id]);
    if ($item = $stmt->fetch()) {
        $new_qty = $item['quantity'] + 1;
        $stmt = $pdo->prepare("UPDATE cart SET quantity = ? WHERE cart_id = ?");
        $stmt->execute([$new_qty, $item['cart_id']]);
    } else {

        $stmt = $pdo->prepare("INSERT INTO cart (product_id, user_session_id, quantity) VALUES (?, ?, 1)");
        $stmt->execute([$product_id, $session_id]);
    }

    //Get total quantity

    $stmt = $pdo->prepare("SELECT SUM(quantity) FROM cart WHERE user_session_id = ?");
    $stmt->execute(([$session_id]));
    $count = $stmt->fetchColumn();

    echo json_encode([
        'success' => true,
        'count' => $count,
        'message' => 'Product added to cart'
    ]);
} catch (Exception $e) {
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
