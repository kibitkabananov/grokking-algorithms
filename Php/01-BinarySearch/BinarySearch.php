<?php

function binarySearch($array, $item) {
	$min = 0;
	$max = count($array) - 1;
	
	while ($min <= $max) {
	    $mid = intdiv($min + $max, 2);
	    $guess = $array[$mid];
		
		if ($guess == $item) {
		    return $mid;
		    
		} else if ($guess > $item) {
			$max = $mid - 1;
			
		} else {
			$min = $mid + 1;
		}
	}

	return null;
};

$list = array(1,3,5,7,9);

assert(binarySearch($list, 1) == 0);
assert(binarySearch($list, 3) == 1);
assert(binarySearch($list, 5) == 2);
assert(binarySearch($list, 7) == 3);
assert(binarySearch($list, 9) == 4);
assert(binarySearch($list, 11) == null);
assert(binarySearch($list, -1) == null);
?>