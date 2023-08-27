<?php
$s = "abacbc";
// Output: true

function areOccurrencesEqual($s) {
        $new_arr = [];
        $solution = [];
        
        $chars_arr = str_split($s,1);
        $solution = array_count_values($chars_arr);
        $solution = array_filter($solution);
        $solution = count(array_unique($solution));
        // $chars_arr = array_unique($chars_arr);
        // foreach ($chars_arr as $char) {
        //     $new_arr[] = $char;
        // }
        // for ($i=0; $i < count($new_arr); $i++) { 
        //     $solution[] = count(array_count_values());
        // }
        if ($solution == 1) {
            return true;
        } else {
            return false;
        }
        
        var_dump($solution);
}

echo areOccurrencesEqual($s);