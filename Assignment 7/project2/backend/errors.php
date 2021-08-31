<?php
interface errorsInterface
{

    public function checkEmail($email, $cond);
    public function checkLoginPassword($password);
}
//implements errorsInterface
class errors 
{
    private $email;
    private $cond;

    public function checkEmail($email, $cond="login")
    {
        if ($cond="login") {

        };
    }

    public function checkLoginPassword($password)
    {
    }
}
