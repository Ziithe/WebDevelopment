<?php

include('connection.php');

if (isset($_REQUEST['submit'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

RegisterClientByPDO($username, $email, $password, $password2);
}
