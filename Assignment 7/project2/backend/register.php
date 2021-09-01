<?php
include "functions.php";


if (isset($_POST['signup'])) {
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];
    if ($userPassword == $_POST['userRe_password']) {

        $user = new user;
        if ($user->checkUser( $userName, $userPassword,$userEmail)) {
            $_SESSION['doneRegister'] = "User Has Added :)";
            header("Location:../register.php");
        } else {
            $_SESSION['errorRegister'] = "Name Is Exists !";
            header("Location:../register.php");
        }
    }
    else
    {
        $_SESSION['errorRegister'] = "Password must equal Re_password !";
            header("Location:../register.php");
    }
}
