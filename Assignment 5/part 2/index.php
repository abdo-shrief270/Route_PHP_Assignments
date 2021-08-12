<?php
include "../Assests/navbar.blade.php";
include "./Logic/check.php";
$users = [];
?>



<div class="container mt-5 pt-5 w-50 m-auto">

    <form class="mt-5 mb-3" method="post" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="text" class="form-control ml-3" name="email" placeholder="Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input required type="password" class="form-control ml-3" id="exampleInputPassword1" name="password" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword2">Password</label>
            <input required type="password" class="form-control ml-3" id="exampleInputPassword2" name="passwordConfirm" placeholder="Re-enter Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary m-auto d-block">Submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {

        $newUser = new user();
        $newUser->email = $_POST['email'];
        $newUser->password = $_POST['password'];
        $newUser->passwordConfirm = $_POST['passwordConfirm'];
        $newUser->addUser();

        if (is_string($newUser->addUser())) {
    ?>
            <div class="alert alert-danger my-3">

                <?php echo $newUser->addUser(); ?>
            </div>
            <?php
        } else {
            $exist = false;
            foreach ($users as $_user) {
                if ($_user[0] == $user->email) {
                    $exist = true;
                }
            }
            if ($exist) {
            ?>
                <div class="alert alert-danger my-3">

                    This email is not Available !
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-success my-3">
                    User added successfully

                </div>
    <?php
                $users[] = $newUser->addUser();
            }
        }
    }
    ?>

    <table class="table table-striped border">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($users as $key => $__user) {
            ?>
                <tr>
                    <th scope="row"><?php echo $key + 1 ?></th>
                    <td><?php echo $__user[0] ?></td>
                    <td><?php echo $__user[1] ?></td>

                </tr><?php
                    }
                        ?>
        </tbody>
    </table>
</div>
<pre>

<?php
print_r($users);?>
    </pre>
    <php?
include "../Assests/footer.blade.php";
?>