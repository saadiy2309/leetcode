<?php

$s = "vector<string> split (string s, char delimiter)";
// Output: >gnirts<rotcev tilps gnirts( ,s rahc )retimiled

function reverseWords($s) {
        // coverting s ito arrays 
        $words = explode(" ", $s);
        // iterating through words
        foreach($words as &$word) {
            // reversing word string characters
            $word = strrev($word);
        }
        // making words array into string format
        return implode(" ", $words);   
}

echo reverseWords($s);
