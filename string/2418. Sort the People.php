<?php
$names = ["Mary","John","Emma"];
$heights = [180,165,170];
// Output: ["Mary","Emma","John"]

function sortPeople($names, $heights) {
        // merge arrays into one as key & value
        $arr = array_combine($heights, $names);
        // sort by key in descending order
        krsort($arr);
        // extracting array values into another array
        $result = array_values($arr);
        return $result;
    }
echo sortPeople($names, $heights);
