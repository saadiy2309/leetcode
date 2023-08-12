<?php

class Solution {

    /**
     * @param String $s
     * @return String[]
     */
    function cellsInRange($s) {
        $alphabet = range(
            substr($s,0,1), 
            substr($s,-2,1)
        );

        $output = [];

        for ($i = 0; $i < count($alphabet); $i++) {
            
            for ($j = intval(substr($s, 1, 1)); $j <= ( intval(substr($s,-1)) - intval(substr($s, 2, 1)) ) ; $j++) { 
                    array_push( $output, $alphabet[$i] . $j );
            }
            
        }

        return $output;
    }
}

