<?php
function pdo_connect_mysql()
{
    $db_host = 'localhost';
    $db_user = 'root';
    $data_pass = '';
    $data_name = 'test-ecommerce';
    try {
        return new PDO('mysql:host=' . $db_host . ';dbname=' . $data_name . ';charset=utf8mb4', $db_user, $data_pass);
    } catch (PDOException $exeption) {
        exit('Failed to connect to databse!');
    }
}
