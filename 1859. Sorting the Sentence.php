<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function sortSentence($s) {
        // make an array 
        $s = explode(' ', $s);
        // extract string into key & value pairs
        for ($i=0; $i < count($s) ; $i++) { 
            $value = substr($s[$i], 0, strlen($s[$i]) - 1 );
            $key = substr($s[$i], - 1 );
            $new_s[$key] = $value;
        }
        // sort by key 
        ksort($new_s);
        // convert to string
        $output = implode(' ', $new_s);

        return $output;
    }
}

