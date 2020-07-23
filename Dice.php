<?php 

$dice_1 = rand(1, 6);
$dice_2 = rand(1, 6);

$total = $dice_1 + $dice_2;

echo "Dice 1 is " . $dice_1 . "</br>";
echo "Dice 2 is " . $dice_2 . "</br>";

echo "Total of the two dice together is " . $total . "</br>";

if ($total == 7 || $total == 11) {
    echo "You're a WINNER BABY!!!";
} else if ($total == 2 || $total == 3 || $total == 12) {
    echo "YOU CRAPPED OUT!!!";
}

