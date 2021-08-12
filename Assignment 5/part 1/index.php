
<?php
include "./"
 ?>
<div class="container">

    <form method="post" action="">
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="Email" id="email">
        <input type="password" name="password" placeholder="Password">
        <button name="submit">enter</button>
    </form>
</div>


<?php
if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = new auth();
    $user->data = [$email, $password];
    $user->login();
}




class auth
{

    public $users = [["abdo@gmail.com", "2020"], ["abdo30@gmail.com", "3030"]];


    public $data = [];

    public  function login()
    {
        if (in_array($this->data, $this->users)) {
            echo "yes";
        } else {
            echo "no";
        }
    }
}

// array_search();
