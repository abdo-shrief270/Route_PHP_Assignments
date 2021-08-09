<div style="padding: 20px 0 30px 0;width:50%;float:left;">

    <center>
        <h1 style="color:red">Part 2</h1>
    </center>

    <form method="post" action="">
        <center><input required type="text" name="firstName" placeholder="First Name" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>
        <center><input required type="text" name="lastName" placeholder="Last Name" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>
        <center><input required type="number" name="number" placeholder="Phone Number" style="padding-top: 10px; padding-bottom:10px; padding-right: 5px; padding-left:5px; margin-top: 15px; "><br></center>

        <center><button style="margin-top:15px; color:#fff ; background-color:#09c ;border:unset; padding :10px 15px ; border-radius:10%;cursor:pointer;" name="submit2">Check</button></center>

    </form>




    <?php
    $click2 = false;
    if (isset($_POST['submit2'])) {
        $click2 = true;
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $number = $_POST['number'];

        if (strlen($firstName) < 3) {
            $error2 = "The first-name must be more than 3 chars !";
        } elseif (strlen($lastName) < 3) {
            $error2 = "The last-name must be more than 3 chars !";
        } elseif (strlen($number) != 11) {
            $error2 = "Phone Number must be 11 Chars !";
        } else {
            $right2 = true;
        }
    }
    ?>

    <center <?php if (!$click2) {
                echo 'style="display:none"';
            } elseif (!isset($error2)) {
                echo 'style="color:green;margin:30px 0 ; "';
            } ?><?php if (isset($error2)) {
                    echo 'style="margin:20px 0 ; color:red;"';
                } ?>><?php if (!isset($error2)) {
                            echo "All is right :)";
                        } ?><?php if (isset($error2)) {
                                echo $error2;
                            } ?></center>

   <center> <h2 <?php if (!isset($right2)) {
            echo 'style="display:none;"';
        } else {
            echo 'style="margin : 30px 0 0 10px"';
        } ?>>Your name is : <?php if (!isset($error2)) {
                            echo $firstName . " " . $lastName;
                        } ?></h2>
    <h3 <?php if (!isset($right2)) {
            echo 'style="display:none;"';
        } else {
            echo 'style="margin : 10px 0 0 10px"';
        } ?>>Your number is : <?php if (!isset($error2)) {
                                echo $number;
                            } ?></h3></center>
    <div style="clear:both"></div>
</div>