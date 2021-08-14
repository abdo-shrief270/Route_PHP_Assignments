<?php
include "../Assests/navbar.blade.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newUser = new user();
    $newUser->data = [$email, $password];
    $message = $newUser->login();
}




class user
{
    public $users = [["abdo@gmail.com", "2020"], ["abdo30@gmail.com", "3030"]];
    public $data = [];
    public  function login()
    {
        if (in_array($this->data, $this->users)) {
            return "Hi " . $this->data[0];
        } else {
            return "There is no user with this data";
        }
    }
}


if ($message == "There is no user with this data") {
?>

    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="alert alert-danger">
                <?php echo $message; ?>
            </h2>
        </div>
    </div>


<?php
}else{
    
        ?>
        
            <div class="container h-100">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="alert alert-success">
                        <?php echo $message; ?>
                    </h2>
                </div>
            </div>
        
        
        <?php
        
}


?>
