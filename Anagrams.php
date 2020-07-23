<?php
// For each pair of words in the array return true or false 
// if the 2 words are anagrams of each other

$words = [['dusty','study'],['break','beaks'],['inch','chin'],['elbow','below'],['kings','sings']];

// A little function, seems to be the best way to check.
function check_anagram($word1, $word2) {
    // count_chars checks the characters. Compare to make sure they are the same. TRUE.
    if (count_chars($word1) == count_chars($word2)) {
        echo '<b>True</b>, ';
    } else {
        // Else False.
        echo '<i>False</i>, ';
    }
}

// Foreach the outter array, 
foreach($words as $wordArray) {
    // vars for $word1 and $word2 storage. Wiped when next check is done.
    $word1 = '';
    $word2 = '';
    // inner array for the two words to be compared.
    foreach($wordArray as $key => $word) {
        // swtich using $key to identify $word1 and $word2.
        switch ($word) {
            case $key == 0:
                $word1 = $word;
                break;
            case $key == 1:
                $word2 = $word;
                break;
        }
    }
    // call to check_anagram outside inner foreach.
    check_anagram($word1, $word2);
}