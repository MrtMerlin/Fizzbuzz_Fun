<?php
// For numbers 1-100 output the number
// If the number is a multiple for 3 output the word Fizz
// If the number is a multiple for 5 output the word Buzz
// If the number is a multiple of both 3 and 5 output FizzBuzz

// foreach for the range from 0 - 100.
foreach(range(0, 100) as $number) {
    // switch statement
    switch ($number) {
        // has to be first as ignored after case. Divisible by 3 and 5. Due to the case statement breakout.
        case ($number % 3 == 0 && $number % 5 == 0):
            echo '<b>FizzBuzz</b>, ';
            switch ($number) {
                case ($number % 3 == 0):
                    echo '<i>Fizz</i>, ';
                    break;
                // Divisible by 5.
                case ($number % 5 == 0):
                    echo 'Buzz, ';
                    break;
            }
            break;
        // Divisible by 3.
        case ($number % 3 == 0):
            echo '<i>Fizz</i>, ';
            break;
        // Divisible by 5.
        case ($number % 5 == 0):
            echo 'Buzz, ';
            break;
    }
}