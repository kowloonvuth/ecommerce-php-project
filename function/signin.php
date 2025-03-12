<?php
require_once('./Database/conn.php');

function login(array $data)
{
    $email = stripslashes(strip_tags(htmlspecialchars($_POST['email'])));
    $password = stripslashes(strip_tags(htmlspecialchars($_POST['pass'])));

    $Email_check = checkEmail($email);
    if (!$Email_check['status']) {
        $Errors['error'] = "Invalid credentials passed. Please, check the Email or Password and try again.";
        return $Errors;
    } else {
        if (password_verify($password, $Email_check['data']['password'])) {
            $_SESSION['current_session'] = [
                'status' => 1,
                'user' => $Email_check['data'],
                'data_time' => date('Y-m-d H:i:s'),
            ];
            header("Location: index.php");
        }

        if (!password_verify($password, $Email_check['data']['password'])) {
            $Errors['error'] = "Invalid credentials passed. Please, check the Email or Password and try again.";
            return $Errors;
        }
    }
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
