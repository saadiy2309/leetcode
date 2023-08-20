<?php
$patterns = ["a","abc","bc","d"]; 
$word = "abc";
// var_dump(str_contains('a', 'abc')); 
// die;
// Output: 3
// str_contains(string $haystack, string $needle): bool
function numOfStrings($patterns, $word) {
        $counter = 0;
        for ($i=0; $i < count($patterns); $i++) { 
                if (str_contains($word, $patterns[$i])) {
                        $counter++;
                }
        }
        return $counter; 
}

echo numOfStrings($patterns, $word); 