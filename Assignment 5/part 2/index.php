<div style="padding: 20px 0 30px 0;width:50%;float:left">

    <center>
        <h1 style="color:red">Part 1</h1>
    </center>
    <form method="post" action="">
        <center><input required type="text" name="email" placeholder="Email" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>
        <center><input required type="password" name="password" placeholder="Password" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>
        <center><input required type="password" name="passwordConfirm" placeholder="Password Confirm" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>

        <center><button style="margin-top:15px; color:#fff ; background-color:#09c ;border:unset; padding :10px 15px ; border-radius:10%;cursor:pointer;" name="submit">Check</button></center>

    </form>




    <?php
    $click = false;
    if (isset($_POST['submit'])) {
        $click = true;
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConfirm = $_POST['passwordConfirm'];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "The email format is't correct !";
        } elseif (strlen($password) < 8) {
            $error = "Password should be more than 8 chars !";
        } elseif ($password !== $passwordConfirm) {
            $error = "Check password and password confirm fields !";
        } else {
            $right = true;
        }
    }
    ?>

    <center <?php if (!$click) {
                echo 'style="display:none"';
            } elseif (!isset($error)) {
                echo 'style="color:green;margin:30px 0 ; "';
            } ?><?php if (isset($error)) {
                    echo 'style="margin:20px 0 ; color:red;"';
                } ?>><?php if (!isset($error)) {
                            echo "All is right :)";
                        } ?><?php if (isset($error)) {
                                echo $error;
                            } ?></center>
    <center>

        <h2 <?php if (!isset($right)) {
                echo 'style="display:none;"';
            } else {
                echo 'style="margin : 30px 0 0 10px"';
            } ?>>Email is : <?php if (!isset($error)) {
                                echo $email;
                            } ?></h2>
        <h3 <?php if (!isset($right)) {
                echo 'style="display:none;"';
            } else {
                echo 'style="margin : 10px 0 0 10px"';
            } ?>>Password is : <?php if (!isset($error)) {
                                    echo $password;
                                } ?></h3>
    </center>
</div>
