<?php

// $allowed = "ab"; 
// $words = ["ad","bd","aaab","baa","badab"];
$allowed = "abc"; 
$words = ["a","b","c","ab","ac","bc","abc"];

function countConsistentStrings($allowed, $words) {
    $counter = 0;

    foreach ($words as $word) {
        $word_arr = str_split($word,1);
        $allowed_arr = str_split($allowed,1);    
        
        $diff = array_diff($word_arr, $allowed_arr );
        
            if (count($diff) == 0) {
                $counter++;
            } else {
                continue;
            }
    }
    return $counter;
}

echo countConsistentStrings($allowed, $words);
