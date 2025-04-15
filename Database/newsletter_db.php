<?php

session_start();

try {
    $db = new PDO('mysql:host=localhost;dbname=test-ecommerce', 'root', '');
} catch (PDOException $e) {
    echo '<p>Whoops, something went wrong</p>';
    echo '<br>';
    echo '<a href="https://localhost:8012/ecommerce-php"> Back to home</a>';
}

$customer = [
    'name' => isset($_POST['name']) && !empty(trim($_POST['name'])) ? trim($_POST['name']) : '',
    'email' => isset($_POST['email']) && !empty(trim($_POST['email'])) ? trim($_POST['email']) : '',
    'created_at' => date("Y-m-d"),
];

$db->prepare("
    INSERT INTO newsletter (name, email, created_at) VALUES (:name, :email, :created_at)
")->execute($customer);

//validate the name and email

if (empty($customer['name']) || empty($customer['email'])) {
    die('Fill in the informations');
}

try {

    $_SESSION['newsletter_success'] = "Thank you, {$customer['name']}, for subscribing to our newsletter!";
    echo "Session variable set: " . $_SESSION['newsletter_success'];
    header("location: http://localhost:8012/ecommerce-php/");
    exit();
} catch (PDOException $e) {
    die('Error saving subscription: ' . $e->getMessage());
}
