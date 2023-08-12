<?php

class Solution {
    /**
     * @param String $key
     * @param String $message
     * @return String */
     
    function decodeMessage($key, $message) {
        // create alphabet letters
        $alphabet = range('a','z');
        // remove spaces
        $trim_key = str_replace(' ', '', $key);
        // convert key string into key array
        $arr_keys = str_split($trim_key,1);
        // remove repeating chars keeping only 1st
        $arr_key = array_unique($arr_keys);
        // merge alphabet and array keys into 1 array as key & value
        $decoder = array_combine($arr_key, $alphabet); 
        
        // convert message string to message array
        $arr_mess = str_split($message,1);

        $output = []; 
        $mystery = '';
        for ($j=0; $j < count($decoder); $j++) { 
            for ($i=0; $i < count($arr_mess); $i++) {    
                
                if ($arr_mess[$i] != ' ') {
                    array_push($output, $decoder[$arr_mess[$i]] );
                }else {
                    array_push($output, ' ' );
                }
            }
            $mystery = implode('', $output);
            break(1);
        }
        
        // $mystery = implode('', $output);
        
        return $mystery;
    }
}

