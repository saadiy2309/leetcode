<?php

$words = ["abc","car","ada","racecar","cool"];
// Output: "ada"

function firstPalindrome($words) {
    // Iterate through words and check if string is palindrome
    for ($i=0; $i < count($words); $i++) { 
        if($words[$i] === strrev($words[$i])){
            return $words[$i];
        }
    }
    return '';
}

echo firstPalindrome($words);