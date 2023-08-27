<?php
$words = ["pay","attention","practice","attend"]; 
$pref = "at";


function prefixCount($words, $pref) {
    $counter = 0;
    $pref_length = strlen($pref);
        for ($i=0; $i < count($words) ; $i++) { 
            
            if ( substr($words[$i], 0, $pref_length) == $pref )
            {
                $counter++;
            }
            // var_dump($words[$i], $pref, $pref_length, substr($words[$i], 0, $pref_length));
        }

    return $counter;    
}

echo  prefixCount($words, $pref);