<?php
include "functions.php";

if (isset($_POST['submitLogin'])) {
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $user = new user;
    $user->checkUser($userEmail, $userPassword);
}
