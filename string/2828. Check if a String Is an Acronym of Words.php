<?php

$words = ["alice","bob","charlie"]; 
$s = "abc";
// Output: true

function isAcronym($words, $s) {
      $acr = '';
      for ($i=0; $i < count($words); $i++) { 
          $acr .= substr($words[$i], 0, 1); 
      }  
      
      if ($acr === $s) {
            return true;
      } else {
        return false;
      }
      
}

echo isAcronym($words, $s);
