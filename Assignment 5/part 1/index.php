<?php
include "Assests/navbar.blade.php";
?>

<div class="container pt-5">
    <div class="m-auto w-50 mt-5 pt-5">

        <form method="post" action="Logic/check.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control ml-3" name="email" placeholder="Email Address" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control ml-3" id="exampleInputPassword1" name="password" placeholder="Enter Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary m-auto d-block">Submit</button>
        </form>
    </div>

</div>


<?php
include "Assests/footer.blade.php";
?>