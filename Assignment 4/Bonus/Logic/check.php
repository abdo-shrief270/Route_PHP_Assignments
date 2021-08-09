<?php

$subjects = [];

function check(&$array,$degree, $seq){

    if ($degree >= 50) {
        $array[] =
            ['Name' => "subject_" . $seq+1, 'Degree' => $degree, 'Status' => "Successful"];
    } else {
        $array[] =
            ['Name' => "subject_" . $seq+1, 'Degree' => $degree, 'Status' => "Failed"];
    }
};
