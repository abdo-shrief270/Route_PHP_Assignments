<?php

$subjects = [];

function check(&$array,$degree, $seq){

    if ($degree >= 50) {
        $array[$seq] =
            ['Name' => "subject_" . $seq+1, 'Degree' => $degree, 'Status' => "Successful"];
    } else {
        $array[$seq] =
            ['Name' => "subject_" . $seq+1, 'Degree' => $degree, 'Status' => "Failed"];
    }
};
