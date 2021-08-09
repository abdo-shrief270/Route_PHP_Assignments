<?php
echo "<h1 style='color:#4e5a6a;font-size:45px;text-align:center'>First Assignment</h1>";

//   1-
#Write program to get minimum number of giv n numbers, ex:1,2,3,4 minimum is 1, using if condition.

$nums = [9, 2, 5, 0, -2,-5]; //This Is The Array Of Given Numbers

echo "<span style='color:#09c;font-size:25px'>1_ There is " . count($nums) . " Numbers</span>";
echo "<br>";
echo "<br>";

# First solution 

$min = min($nums);

#Second  Solution

# $nums = [9, 2, 5, 0, -2]; //This Is The Array Of Given Numbers
// $min =$nums[0];
// for ($i = 0; $i < count($nums); $i++) {
//     if ($i + 1 < count($nums)) {
//         if ($nums[$i] < $nums[$i + 1] && $nums[$i] < $min) {
//             $min = $nums[$i];
//         } elseif ($nums[$i + 1] < $nums[$i] && $nums[$i + 1] < $min) {
//             $min = $nums[$i + 1];
//         }
//     }
// };

$message = "<span style='color:green;font-size:20px'>The Minimum Number Is $min</span>";

echo $message;

#-------------------------------------------------------------------------#

echo "<br>";
echo "---------------------------------------------------------------------";
echo "<br>";

#-------------------------------------------------------------------------#

//   2-
#Write program to get middle number of given 3 numbers, ex: 2,8,6 the middle number will be 6.
$num2_1 = 5;
$num2_2 = 2;
$num2_3 = 3;

echo "<span style='color:#09c;font-size:25px'>2_ The Three Numbers Are ($num2_1 , $num2_2 , $num2_3)</span>";
echo "<br>";
echo "<br>";

if ($num2_1 < $num2_2 && $num2_1 < $num2_3 && $num2_1 !== $num2_2 && $num2_2 !== $num2_3 && $num2_1 !== $num2_3) {
    if ($num2_2 > $num2_1 && $num2_2 > $num2_3) {
        echo "<span style='color:green;font-size:20px'>The Middle Number Is <strong>$num2_3</strong></span>";
    } else {
        echo "<span style='color:green;font-size:20px'>The Middle Number Is <strong>$num2_2</strong></span>";
    }
} elseif ($num2_2 < $num2_1 && $num2_2 < $num2_3 && $num2_1 !== $num2_2 && $num2_2 !== $num2_3 && $num2_1 !== $num2_3) {
    if ($num2_1 > $num2_2 && $num2_1 > $num2_3) {
        echo "<span style='color:green;font-size:20px'>The Middle Number Is <strong>$num2_3</strong></span>";
    } else {
        echo "<span style='color:green;font-size:20px'>The Middle Number Is <strong>$num2_1</strong></span>";
    }
} else {
    echo "<span style='color:red;font-size:20px'>Please make sure that The three numbers are Different</span>";
}

#-------------------------------------------------------------------------#

echo "<br>";
echo "---------------------------------------------------------------------";
echo "<br>";

#-------------------------------------------------------------------------#

//   3-
#Write program to calculate 4 numbers and check if the sum of the 4 number bigger than 100 or not, if bigger than 100 echo "valid" if not echo "not valid".

$num3_1 = 100;
$num3_2 = 2;
$num3_3 = 3;
$num3_4 = 4;

$sum = $num3_1 + $num3_2 + $num3_3 + $num3_4;


echo "<span style='color:#09c;font-size:25px'>3_ The Four Numbers Are ($num3_1 , $num3_2 , $num3_3,$num3_4)</span>";
echo "<br>";
echo "<br>";

if ($sum > 100) {
    echo "<span style='color:green;font-size:20px'>valid</span>";
} else {
    echo "<span style='color:red;font-size:20px'>not valid</span>";
}

?>
<script>
    console.log('Thanks to look at my code');
</script>