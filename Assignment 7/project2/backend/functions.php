<?php
session_start();
include "dbCont.php";





class dbCheck
{
    public static function checkName($name, $cond = null)
    {
        global $cont;
        $checkName = $cont->prepare("SELECT * FROM users2 WHERE name=? LIMIT 1");
        $checkName->execute([$name]);
        
        if ($cond) {
            return $checkName->fetch();
        }
        return $checkName->fetchAll();
    }
}



class dbActions
{
    public static function register($name, $email, $password)
    {
        global $cont;
        $checkRegister = dbCheck::checkName($name);
        if (count($checkRegister) == 0) {
            $addUser = $cont->prepare("INSERT INTO users2 (name,email,password) VALUES (?,?,?)");
            return $addUser->execute([$name, $email, $password]);
        } else {
            return false;
        }
    }
    public static function login($name, $password)
    {
        $checkLogin = dbCheck::checkName($name, true);

        if ($checkLogin['password'] == $password) {
            return $checkLogin;
        } elseif ($checkLogin == false) {
            return "Name Not Found";
        }
        return "Password Is Incorrect";
    }
}



class user
{

    public function checkUser($name, $password, $email = null)
    {
        if (is_null($email)) {
            $login = dbActions::login($name, $password);
            if (is_array($login)) {

                $_SESSION['doneLogin'] = "Hello " . $login['name'] . " :)";
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
