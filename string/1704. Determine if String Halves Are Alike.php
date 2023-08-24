<?php
$s = "textbook";
function halvesAreAlike($s) {
       
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
   
        $length = strlen($s);
        
        $left = substr($s,0,$length/2);
        $left_arr = str_split($left, 1);
        
        $right = substr($s,$length/2);
        $right_arr = str_split($right, 1);
        // var_dump($left, $right); die;

        $left_counter = 0;
        $right_counter = 0;
        
        for ($i=0; $i < count($left_arr); $i++) { 
            if (in_array( $left_arr[$i], $vowels))
            {
                $left_counter++;
            }
        }

        for ($j=0; $j < count($right_arr); $j++) { 
            if (in_array( $right_arr[$j], $vowels))
            {
                $right_counter++;
            }
        }

        if($left_counter === $right_counter) { return true; } else { return false; }

}

echo halvesAreAlike($s); 