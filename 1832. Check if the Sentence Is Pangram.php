<?php

class Solution {

    /**
     * @param String $sentence
     * @return Boolean
     */
    function checkIfPangram($sentence) {
        $count = strlen($sentence);
        $arr_sentence = str_split($sentence, 1);
        // if length of sentence is less than number of letter in alphabet 
        // or the length of unique characters in sentence array is less than 26
        //automatically return false
        if (strlen($sentence) < 26 || count(array_unique($arr_sentence)) < 26)
        {
            return false;
        } else {     
            // iterate through array of elements of sentence
            for ($i=0; $i < $count; $i++) { 
                // if element of sentence is present within return true
                if (in_array($arr_sentence[$i], range('a','z'))) {
                    return true;
                } else { // else return false
                    return false;
                }
            }
        }
    }
}

