<?php

$s = "(1+(2*3)+((8)/4))+1";

function maxDepth($s) {
        // convert string to array
        $s_arr = str_split($s);
        // declaring depth
        $currentDepth = 0;
        $maxDepth = 0;

        foreach ($s_arr as $char) {
            // isOpen
            if ($char === '(') $currentDepth++;

            // isClose
            if ($char === ')') {    
                if ($maxDepth < $currentDepth) {
                        $maxDepth = $currentDepth;
                } 
                $currentDepth--;
            } 
        }

        return $maxDepth;
    }


echo maxDepth($s);
