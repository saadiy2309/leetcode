<?php

$s = "string";
$output = "rtsng";

function finalString($s) {
//    get into array
//    reinsert into array by char
//    when there is letter "i" reverse what is within array so far
//    at the end convert to string and return
        $s_arr = str_split($s,1);
//        var_dump(array_reverse($s_arr)); die;
        $reversed = [];

        for ($i = 0; $i < count($s_arr); $i++) {
            if ($s_arr[$i] == 'i'){
                $reversed = array_reverse($reversed);
            } else {
                $reversed[] = $s_arr[$i];
            }
        }

    return implode($reversed);
}

echo finalString($s);