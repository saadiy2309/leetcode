<?php

class Solution {

    /**
     * @param String[][] $items
     * @param String $ruleKey
     * @param String $ruleValue
     * @return Integer
     */
    function countMatches($items, $ruleKey, $ruleValue) {
        
        $counter = 0;

        for ($i=0; $i < count($items); $i++) { 
            if ($ruleKey === 'type' && $ruleValue === $items[$i][0]) {
                $counter++;
            } elseif ($ruleKey === 'color' && $ruleValue === $items[$i][1]){
                $counter++;
            } elseif ($ruleKey === 'name' && $ruleValue === $items[$i][2]){
                $counter++;
            }        
        }

        return $counter;
    }
}

