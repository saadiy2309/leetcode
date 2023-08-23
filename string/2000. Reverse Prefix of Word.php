<?php

$word = "abcdefd";
$ch = "d";
// dcbaefd

function reversePrefix($word, $ch) {
        
        // find position by str_pos() cut that part +1 character including needle in the haystack and reverse that part
        $reversed_part = strrev(substr($word, 0, strpos($word, $ch)+1));
        // find position by str_pos() and cut waht is left from above
        $left_part = substr($word, strpos($word, $ch)+1);
        // return in concatinated form
        return $reversed_part . $left_part;
        // var_dump($left_part);
}

echo reversePrefix($word, $ch);