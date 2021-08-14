<?php

$subjects = [];

class sub
{
   
    private $subjects;
    public $results;
    public function __construct($sub1, $sub2, $sub3, $sub4, $sub5)
    {
        $this->subjects[] = $sub1;
        $this->subjects[] = $sub2;
        $this->subjects[] = $sub3;
        $this->subjects[] = $sub4;
        $this->subjects[] = $sub5;
    }

    public function calc()
    {
        for ($i = 0; $i < 5; $i++) {


            if ($this->subjects[$i] >= 50) {
                $this->results[] =
                    ['Name' => "subject_" . $i + 1, 'Degree' => $this->subjects[$i], 'Status' => "Successful"];
                continue;
            }
            $this->results[] =
                ['Name' => "subject_" . $i + 1, 'Degree' => $this->subjects[$i], 'Status' => "Failed"];
        }
    }
}


if (isset($_POST["submit"])) {
    $newsub = new sub($_POST['subject_1'], $_POST['subject_2'], $_POST['subject_3'], $_POST['subject_4'], $_POST['subject_5']);

    $newsub->calc();

?>
<?php include "../Assests/navbar.blade.php";?>
    <div class="mt-5 container">
        <table class="table table-striped border m-auto mt-5 w-50">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Degree</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>

                <?php
                for ($i = 0; $i < count($newsub->results); $i++) {
                ?> <tr>
                        <th scope='row'><?php echo $i + 1; ?></th>
                        <td><?php echo $newsub->results[$i]['Name'] ?> </td>
                        <td><?php echo $newsub->results[$i]['Degree'] ?></td>
                        <td><?php echo $newsub->results[$i]['Status'] ?></td>
                    </tr><?php
                        }

                            ?></tbody>
        </table>
    </div><?php

            }
                ?>