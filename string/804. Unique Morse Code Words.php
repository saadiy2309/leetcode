<?php


//$words = ["gin","zen","gig","msg"] ;
$words = ["vtpke","vngc","vnqr","gbzx","qvdx"] ;

function uniqueMorseRepresentations($words) {
    $morse_alphabet = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
    $alphabet = range('a','z');
    $new_alphabet = array_combine($alphabet, $morse_alphabet);
    $morse_word_arr = [];

    for ($i = 0; $i < count($words); $i++) {
        $morse_word = [];

        for ($j = 0; $j < strlen($words[$i]); $j++) {
            $letters =  str_split($words[$i],1);
            $morse_word[] = $new_alphabet[$letters[$j]];
        }
        $morse_word_str = implode($morse_word);
        $morse_word_arr[] = $morse_word_str;
    }
    var_dump(($morse_word_arr));
    if (count($morse_word_arr) > 1 && count(array_unique($morse_word_arr)) > 1){
        return count($morse_word_arr) - count(array_unique($morse_word_arr));
    } else {
        return 1;
    }
}
echo uniqueMorseRepresentations($words);