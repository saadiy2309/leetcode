<?php

$num = "51230100";
//  Output: "512301"

function removeTrailingZeros($num) {
    
    $count = count(str_split($num,1));
    $num_arr = str_split($num,1);

    for ($i=1; $i < $count; $i++) { 

            if ($num_arr[$count - $i] == 0 ) {
                unset($num_arr[$count - $i]);
            }
    }
    $result = implode($num_arr);
    return $result;
    // var_dump($result);        
}

echo removeTrailingZeros($num);