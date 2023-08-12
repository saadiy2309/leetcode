<?php

$s = "Hello";

function toLowerCase($s):string {
    return strtolower($s);
}
echo toLowerCase($s);
/*
    Could use more complex way of solving this quesetion such as:
    generating alphabet as key value pair with uppercase and lowercase letters
    then iterating over them and modifying to lowercase and inserting into array
    and converting array to string at the end

    but above was the easiest way by using core php functionality
 */

