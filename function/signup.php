<?php
require_once('./Database/conn.php');

function signup(array $data)
{
    $first_name = stripslashes(strip_tags(htmlspecialchars($_POST['first-name'])));
    $last_name = stripslashes(strip_tags(htmlspecialchars($_POST['last-name'])));
    $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'])));
    $password = stripslashes(strip_tags(htmlspecialchars($_POST['pass'])));

    $Errors = [];

    if (isset($_POST['agree-term'])) {
        return [];
    } else {
        $Errors['agree-term'] = "You must agree to our terms and services.";
        $Errors['error'] = 'Please correct the error in your form to continue.';
        return $Errors;
    }

    if (preg_match('/[^A-Za-z0-9_]/', $first_name)) {
        $Errors['first_name'] = "Sorry please enter a valid first name";
    }

    if (preg_match('/[^A-Za-z0-9_]/', $last_name)) {
        $Errors['last_name'] = "Sorry please enter a valid last name";
    }

    $emailExist = checkEmail($email);
    if ($emailExist['status']) {
        $Errors['email'] = "Sorry, this email already exists";
    }

    if (strlen($password) < 7) {
        $Errors['password'] = "Sorry use a stronger password";
    }
    if (count($Errors) > 0) {
        $Errors['error'] = 'Please, correct the Error in your form in order to continue';
        return $Errors;
    } else {
        $Data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'password' => $password,
        ];
        $registeration = Register($Data);
    }

    // if ($registeration) {
    //     array_pop($Data);
    //     $_SESSION['current_session'] = [
    //         'status' => 1,
    //         'user' => $Data,
    //         'date_time' => date('Y-m-d H:i:s'),
    //     ];
    //     header("Location: .php");
    // } else {
    //     $Errors['error'] = "Sorry an unexpected error and your account could not be created. Please try again later.";
    //     return $Errors;
    // }
}

function checkEmail(string $email): array
{
    $db_host = pdo_connect_mysql();
    $statement = $db_host->prepare("SELECT * FROM `user` WHERE `email` = :email");
    $statement->bindValue(':email', $email, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if (empty($result)) {
        $response['status'] = false;
        $response['data'] = [];
        return $response;
    }

    $response['status'] = true;
    $response['data'] = $result;
    return $response;
}

function Register(array $data)
{
    $db_host = pdo_connect_mysql();
    $statement = $db_host->prepare("INSERT INTO `user` (first_name, last_name, email, password, status, created_at, updated_at) VALUES (:first_name, :last_name, :email, :password, :status, :created_at, :updated_at)");

    $timestamp = date('Y-m-d H:i:s');
    $status = 1;
    $password = password_hash($data['password'], PASSWORD_BCRYPT);

    $statement->bindValue(':first_name', $data['first_name'], PDO::PARAM_STR);
    $statement->bindValue(':last_name', $data['last_name'], PDO::PARAM_STR);
    $statement->bindValue(':email', $data['email'], PDO::PARAM_STR);
    $statement->bindValue(':password', $password, PDO::PARAM_STR);
    $statement->bindValue(':status', $status, PDO::PARAM_STR);
    $statement->bindValue(':created_at', $timestamp, PDO::PARAM_STR);
    $statement->bindValue(':updated_at', $timestamp, PDO::PARAM_STR);


    $result = $statement->execute();
    if ($result) {
        return true;
    } else {
        return false;
    }
}
