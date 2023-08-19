<?php
$s = "a1c1e1"; 
// Output: "abcdef" 
 
function replaceDigits($s) { 
    $s_arr = str_split($s, 1); 
    $new_s_arr = [];   
    for ($i=0; $i < count($s_arr); $i++) {  
             
        if ( $i % 2 == 0 ) { 
            $new_s_arr[] = $s_arr[$i];     
        } else { 
            $char_number = $s_arr[$i-1] . $s_arr[$i]; 
            $range = range($s_arr[$i-1],'z');
            $new_s_arr[] = $range[$s_arr[$i]];
        } 
    } 
        $result = implode($new_s_arr);   
        return $result; 
} 

echo replaceDigits($s);