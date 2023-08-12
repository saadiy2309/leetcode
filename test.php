<?php 


$s = 'LVIII';
$length = strlen($s);

 function romanToInt($s) {
        
        $arr = str_split($s);
		$num = 0;    

		// echo "<pre>";
		// 	var_dump($arr); die;
		// echo "<pre>";

        foreach ( $arr as $char ){
			
           $son = match($char) {
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000, 
            };
        	    
            $num += $son;
        echo $num .'<br>';
        }
	return $num;
}

romanToInt($s);