<?php
session_start();
include '/xampp/htdocs/ecommerce-php/Database/conn.php';

$pdo = pdo_connect_mysql();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_id = $_POST['product_id'] ?? null;
    $action = $_POST['action'] ?? null;
    $session_id = session_id();

    if ($product_id && $action) {
        try {
            if ($action === 'increase') {
                // Increase quantity by 1
                $stmt = $pdo->prepare("
                    UPDATE cart 
                    SET quantity = quantity + 1 
                    WHERE product_id = ? AND user_session_id = ?
                ");
                $stmt->execute([$product_id, $session_id]);
            } elseif ($action === 'decrease') {
                // Decrease quantity by 1 (minimum 1)
                $stmt = $pdo->prepare("
                    UPDATE cart 
                    SET quantity = GREATEST(quantity - 1, 1) 
                    WHERE product_id = ? AND user_session_id = ?
                ");
                $stmt->execute([$product_id, $session_id]);
            } elseif ($action === 'remove') {
                // Remove item completely
                $stmt = $pdo->prepare("
                    DELETE FROM cart 
                    WHERE product_id = ? AND user_session_id = ?
                ");
                $stmt->execute([$product_id, $session_id]);
            }

            echo json_encode(['success' => true]);
            exit;
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
            exit;
        }
    }
}

http_response_code(400);
echo json_encode(['success' => false, 'error' => 'Invalid request']);
