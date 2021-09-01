<?php
session_start();
include "dbCont.php";





class dbCheck
{
    public static function checkEmail($email, $cond = null)
    {
        global $cont;
        $checkEmail = $cont->prepare("SELECT * FROM users WHERE EMAIL=? LIMIT 1");
        $checkEmail->execute([$email]);
        if ($cond) {
            return $checkEmail->fetch();
        }
        return $checkEmail->fetchAll();
    }
}


class dbActions
{
    public static function register($name, $email, $password)
    {
        global $cont;
        $checkRegister = dbCheck::checkEmail($email);
        if (count($checkRegister) == 0) {
            $addUser = $cont->prepare("INSERT INTO users (name,email,password) VALUES (?,?,?)");
            return $addUser->execute([$name, $email, $password]);
        } else {
            return false;
        }
    }
    public static function login($email, $password)
    {
        $checkLogin = dbCheck::checkEmail($email, true);
        
        if ($checkLogin['password'] == $password) {
            return $checkLogin;
        }elseif($checkLogin == false)
        {
            return "Email Not Found";
        }
        return "Password Is Incorrect";
    }
}



class user
{
  
    public function checkUser($email, $password, $name = null)
    {
        if (is_null($name)) {
            $login = dbActions::login($email, $password);
            if (is_array($login)) {
               
                $_SESSION['done'] = "Hello " . $login['name'] . " :)";
                header("Location:../index.php");
            } else {
                $_SESSION['errorLogin'] = $login;
                header("Location:../index.php");
            }
        } else {
            return dbActions::register($name, $email, $password);
        }
    }
}
