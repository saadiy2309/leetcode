<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $r = 0;
        $l = 0;
        $count = 0;
        
        for($i=0; $i < strlen($s); $i++) {
            if($s[$i] === "R"){
                $r++;
            }else{
                $l++;
            }

            if($r === $l){
                $count++;
            }
        }

        return $count;
    }
}

