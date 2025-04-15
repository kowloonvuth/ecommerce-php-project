<?php
session_start();
include '/xampp/htdocs/ecommerce-php/Database/conn.php';

header('Content-Type: application/json');

try {
    $pdo = pdo_connect_mysql();
    $session_id = session_id();

    // Get cart items from database
    $stmt = $pdo->prepare("
        SELECT p.id, p.title, p.price, p.img, c.quantity 
        FROM cart c 
        JOIN products p ON c.product_id = p.id 
        WHERE c.user_session_id = ?
    ");
    $stmt->execute([$session_id]);
    $cart_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $total_count = 0;
    $html = '';

    foreach ($cart_items as $item) {
        $total_count += $item['quantity'];
        $html .= '<li class="list-group-item d-flex justify-content-between align-items-center">';
        $html .= '<img src="./assets/images/' . htmlspecialchars($item['img']) . '" width="50" height="50">';
        $html .= '<div class="ms-3">';
        $html .= '<h6 class="my-0">' . htmlspecialchars($item['title']) . '</h6>';
        $html .= '<small class="text-muted">$' . number_format($item['price'], 2) . ' × ' . $item['quantity'] . '</small>';
        $html .= '</div>';
        $html .= '<span class="badge bg-primary rounded-pill">$' . number_format($item['price'] * $item['quantity'], 2) . '</span>';
        $html .= '</li>';
    }

    echo json_encode([
        'success' => true,
        'count' => $total_count,
        'html' => $html
    ]);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}
