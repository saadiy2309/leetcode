<?php

// $rings = "B8R3G0G3R9G8G9B4R3G9B9B5";
$rings = "B9R9G0R4G6R8R2R9G9";

function countPoints($rings) {

    $arr_rings = str_split($rings, 2);    
    $sorted_arr = [];
    $rods = [];
    $counter = 0;
    // iterating and sorting arrays after replacing number of rod and color chars 
    foreach ($arr_rings as $key) {
        $sorted_arr[] = strrev($key);
        sort($sorted_arr);
    }
    // looping through array and finding all occured rod numbers 
    for ($i=0; $i < count($sorted_arr); $i++) { 
        $rods[] = substr($sorted_arr[$i], 0, 1);
    }
    // getting unique rod numbers
    $unique = array_unique($rods);
       
    // iterating through unique rod numbers
    foreach ( $unique as $key ) {
        // if 3 colors are available in one unique rod then increment counter
        if ( 
            in_array( $key . 'R', $sorted_arr ) == true && 
            in_array( $key . 'G', $sorted_arr ) == true && 
            in_array( $key . 'B', $sorted_arr ) == true
            ) {
                $counter++;
            }
    }

    return $counter;
}

echo countPoints($rings);
