<?php

$words = ["cd","ac","dc","ca","zz"];

function maximumNumberOfStringPairs($words) {
        $counter = 0;
        // taking count of array into array when counted within for loop number of loops decreased than actual
        $arr_count = count($words);
        for ($i=0; $i < $arr_count; $i++) { 
                // reserving array element into reserve varialble
                $reserve = $words[$i];
                // taking that element out of array for correct counting and avoiding duplicates 
                unset($words[$i]);
                // if there is equal string when reversed then increment 
                if ( in_array( strrev($reserve), $words ) ) {    
                    $counter++;
                }    
        }
        return $counter;
    }

echo maximumNumberOfStringPairs($words);
