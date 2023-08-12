<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function truncateSentence($s, $k) {
       
       $s = explode(' ', $s);
       $new_s = '';

       for ($i=0; $i < $k; $i++) { 
           $new_s .= $s[$i] . ' ';
       }

       $new_s = rtrim($new_s);
       return $new_s; 
    }
}

