<?php

class Solution {

    /**
     * @param String[] $word1
     * @param String[] $word2
     * @return Boolean
     */
    function arrayStringsAreEqual($word1, $word2) {
        $word1 = implode($word1);
        $word2 = implode($word2);

        if ($word1 === $word2) {
            return true;
        } else {
            return false;
        }
    }
}

