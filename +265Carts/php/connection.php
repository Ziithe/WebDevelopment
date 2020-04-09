<?php
require_once 'database.php';

//Prep for DB Connection:
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "+265carts";


function RegisterClientByPDO($username, $email, $password, $password2) {
    $conn = PDODBConnect($GLOBALS['dbhost'], $GLOBALS['dbuser'], $GLOBALS['dbpass'], $GLOBALS['dbname']);
//    $hashedpassword = HashWithMD5($password);
    echo $username.'-'.$email.'-'.$password.'-'.$password2;
    $query = "INSERT INTO sign_up (username, email, password, password2)"."VALUES(?, ?, ?, ?)";
    $statement = $conn->prepare($query);
    $result = $statement->execute([$username, $email, $password, $password2]);

    if ($result) {
        echo "Sign Up Successful!";
    } else {
        echo "Could not sign up!";
    }
}

//function HashWithMD5($text) {
//    $hashedpassword = MD5($text);
//    return $hashedpassword;
//}
//
//function HashWithMD5AndSalt($text, $salt) {
//    $hashedpassword = MD5($text . $salt);
//    return $hashedpassword;
//}
//
//function HashWithSHA256() {
//
//}
//
