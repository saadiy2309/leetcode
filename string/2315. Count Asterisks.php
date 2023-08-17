<?php

$s = "yo|uar|e**|b|e***au|tifu|l";
// Output: 2

function countAsterisks($s) {
    $counter = 0;
    $s_arr = str_split($s);

    // cleaning string parts with | | pairs
    $char = strpos($s, '|');
    // converting into array by separator | 
    $diff = explode('|', $s); 
    
    for ($i=0; $i < count($diff); $i++) { 
        // checking even odd number of string array. We need odd ones
        if ($i % 2 == 0) { 
            $counter += substr_count($diff[$i], '*');  
        }
    }
    
    return $counter;
}

echo countAsterisks($s);
