<?php
// The array contains the numbers 1-100 and 1 duplicate number
// Find and output the duplicate number

$numbers = [86,54,35,12,60,73,74,28,15,19,70,21,84,94,78,87,66,90,4,10,77,31,9,99,20,44,80,49,3,52,83,32,30,65,100,7,11,17,61,58,72,71,8,67,97,47,46,43,89,51,59,64,5,75,40,29,39,63,95,79,42,93,68,1,13,62,76,36,55,42,14,27,69,25,98,56,24,45,38,16,85,34,81,50,33,91,82,53,18,37,41,88,92,26,23,57,48,6,2,22,96];

// foreach through each of the numbers, with $key.
foreach ($numbers as $key => $number) {
    // removes items from array in order, prevents duplication
    unset($numbers[$key]);
    // now if duplicate of key exists prints as duplicte.
    if (in_array($number, $numbers)) {
        echo "Duplicate number is " . $number . ".</br>";
    }
}





