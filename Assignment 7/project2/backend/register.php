<?php
include "functions.php";


if (isset($_POST['submitRegister'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    $user=new user;
    if ($user->checkUser( $userEmail, $userPassword,$userName)) {
        $_SESSION['done'] = "User Has Added :)";
        header("Location:../index.php");
    }
    else
    {
        $_SESSION['error'] = "Email Is Exists !";
        header("Location:../index.php");
    }
}
