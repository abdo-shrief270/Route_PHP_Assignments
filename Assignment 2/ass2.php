<?php
//SOLUTION

// $a = [1,2,3,4,5,6,7,8,9,10];

//_1


// function swapAllOfArray(&$array)
// {
    // for ($i = 0; $i < count($array) / 2; $i++) {
    //     $temp = $array[(count($array)) - ($i+1)];
    //     $array[(count($array)) - ($i+1)] = $array[$i];
    //     $array[$i] = $temp;
    // }
// }
// swapAllOfArray($a);






//_2

// function sortArray(&$array)
// {
//     for ($j = 0; $j < count($array); $j++) {
//         for ($i = 0; $i < count($array)-1; $i++) {
          
//                 if ($array[$i] > $array[$i + 1]) {
//                     $temp = $array[$i];
//                     $array[$i] = $array[$i + 1];
//                     $array[$i + 1] = $temp;
//                 }
            
            
           
//         }
//     }
// }
// sortArray($a);



//_3

// function deleteEvenFromArray(&$array)
// {
//     foreach ($array as $key => $value) {
//         foreach ($value as $key2 => $num) {
//             if ($num % 2 == 0) {
//                 unset($array[$key][$key2]);
//             }
//         }
//     }
// }

// deleteEvenFromArray($a);

//_4

// function swapHalfOfArray(&$array)
// {
//     for ($i = 0; $i < count($array) / 2; $i++) {
//         $temp = $array[(count($array) / 2) + $i];
//         $array[(count($array) / 2) + $i] = $array[$i];
//         $array[$i] = $temp;
//         //or
//         $temp = $array[$i];
//         $array[$i] = $array[(count($array)/2 +$i)];
//         $array[(count($array)/2 +$i)] = $temp;
//     }
// }

// swapHalfOfArray($a);


// echo "<pre>";
// print_r($a);
// echo "</pre>";
