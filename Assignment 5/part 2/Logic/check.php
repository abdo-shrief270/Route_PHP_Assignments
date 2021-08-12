<?php



class user
{
    public $email;
    public $password;
    public $passwordConfirm;

    public function addUser()
    {
        $error = null;
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $error = "The email format is't correct !";
        } elseif (strlen($this->password) < 8) {
            $error = "Password should be more than 8 chars !";
        } elseif ($this->password !== $this->passwordConfirm) {
            $error = "Check password and password confirm fields !";
        } else {
            return [$this->email, $this->password];
        }
        return $error;
    }
};
