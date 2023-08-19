<?php
$s = "(()())(())";
//Output: 2

function removeOuterParentheses($S) {
        $solution = [];
        $s_arr = str_split($S);
        $result = '';
		$part = '';
        $stack = new SplStack();
        for ($i = 0; $i < strlen($S); $i++) {
            $part .= $S[$i];
            if ($stack->isEmpty()) {
                $stack->push($S[$i]); 
            } else {
                $top = $stack->top();
                if ($top == '(' && $S[$i] == ')') {
                    $stack->pop();   
                    if ($stack->isEmpty()) {
                        $result .= substr($part, 1, strlen($part)-2);
                        $part = '';
                    }
                } else {
                    $stack->push($S[$i]);    
                }
            }          
        }
        
        return $result;
    }

echo removeOuterParentheses($s);