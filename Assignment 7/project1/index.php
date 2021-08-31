<?php
session_start();

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php
    if (isset($_SESSION['done'])) {
    ?>

        <h2 class="alert alert-success"><?php echo $_SESSION['done'] ?></h2>

    <?php
        unset($_SESSION['done']);
    }
    ?>
    <?php
    if (isset($_SESSION['error'])) {
    ?>

        <h2 class="alert alert-danger"><?php echo $_SESSION['error'] ?></h2>

    <?php
        unset($_SESSION['error']);
    }
    ?>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post" action="backend/register.php">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input required minlength="3" name="userName" type="text" placeholder="Name" />
                <input required name="userEmail" type="email" placeholder="Email" />
                <input required minlength="8" name="userPassword" type="password" placeholder="Password" />
                <button name="submitRegister">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="backend/login.php" method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input required name="userEmail" type="email" placeholder="Email" />
                <input required minlength="8" name="userPassword" type="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button name="submitLogin">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
    </footer>

    <script src="js/code.js"></script>
</body>

</html>