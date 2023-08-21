<?php

$word1 = "ab";
$word2 = "pqrs";

function mergeAlternately($word1, $word2) {
        $word1_arr = str_split($word1,1);
        $word2_arr = str_split($word2,1);
        $new_arr = [];
        $result_arr = [];

        // finding which array has more count then interating based on that count
        if ( count($word1_arr) >= count($word2_arr) ) {
            $count = count($word1_arr);
        } else {
            $count = count($word2_arr);
        }
        
        // iterate over count of more counted array
        for ($i=0; $i < $count; $i++) { 
                $new_arr[] = $word1_arr[$i];
                $new_arr[] = $word2_arr[$i];
        }
        // removing null values
        $result_arr = array_filter($new_arr);
        // convert to string
        $result_str = implode($result_arr);
        
        return $result_str;
}

echo mergeAlternately($word1, $word2);