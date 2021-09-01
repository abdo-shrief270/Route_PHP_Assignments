<?php
include "functions.php";

if (isset($_POST['signin'])) {
    $userName = $_POST['your_name'];
    $userPassword = $_POST['your_pass'];
    $user = new user;
    $user->checkUser($userName, $userPassword);
}
