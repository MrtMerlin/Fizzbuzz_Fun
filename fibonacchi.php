<?php

// fibonachhi number line, 
// takes current number adds to next number in the sequence

// non-recursive way of fibonacci sequence.

// how many times will repeat nth times.
$number = 20;

// call to function. with amount of times to call.
Fib($number);

// function.
function Fib($number)
{
    // initial numbers and counter number for repetition.
    $number_1 = 0;
    $number_2 = 1;
    $counter = 0;

    // while loop, counter to $number variable.
    while($counter < $number) {
        // echo first number.
        echo ' ' . $number_1; 
        // add first and second number together.
        $number_3 = $number_2 + $number_1;
        // second number reassigned to first number.
        $number_1 = $number_2;
        // new 3rd number assigned to second number. 
        $number_2 = $number_3;
        // counter increases
        $counter = $counter+1; 
    }
}



