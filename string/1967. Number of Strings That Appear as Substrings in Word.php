<?php
$patterns = ["a","abc","bc","d"]; 
$word = "abc";

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