<?php
include "Assests/navbar.blade.php";
?>

    <center class="mt-5 pt-5">
        <form method="POST" action="Logic/check.php">
            <label for="subject_1">Subject 1</label>
            <input required id="subject_1" min="0" max="100" type="number" name="subject_1" placeholder="Degree">
            <br>
            <br>


            <label for="subject_1">Subject 2</label>
            <input required id="subject_2" min="0" max="100" type="number" name="subject_2" placeholder="Degree">
            <br>
            <br>

            <label for="subject_1">Subject 3</label>
            <input required id="subject_3" min="0" max="100" type="number" name="subject_3" placeholder="Degree">
            <br>
            <br>

            <label for="subject_1">Subject 4</label>
            <input required id="subject_4" min="0" max="100" type="number" name="subject_4" placeholder="Degree">
            <br>
            <br>

            <label for="subject_1">Subject 5</label>
            <input required id="subject_5" min="0" max="100" type="number" name="subject_5" placeholder="Degree">
            <br>
            <br>


            <button name="submit" class="btn btn-primary">check</button>

        </form>
    </center>

   








