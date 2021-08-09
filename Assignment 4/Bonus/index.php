<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Assignment 4</title>
</head>

<body class="pb-5">

    <center class="mt-5">
        <form method="POST" action="">
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

    <?php
    include "Logic/check.php";
    if (isset($_POST["submit"])) {

        for ($i = 0; $i < 5; $i++) {
            check($subjects, $_POST["subject_" . ($i + 1)], $i);
        }

        echo '<center>
        <table class="table table-striped border mt-5 w-50">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>';

        ////////////////////////
        for ($i = 0; $i < 5; $i++) {
            echo " <tr>
            <th scope='row'>" . $i + 1 . "</th>
            <td>" . $subjects[$i]['Name'] . "</td>
            <td>" . $subjects[$i]['Degree'] . "</td>
            <td>" . $subjects[$i]['Status'] . "</td>
          </tr>";
        }
        ////////////////////////
        echo '</tbody>
           </table>
           </center>';
    }?>

</body>

</html>