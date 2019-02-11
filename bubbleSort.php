<?php
$arr=[7, 5, 3, 6, 9, 1];
echo "Before sorting".PHP_EOL;
print_r($arr);

	for($i=0; $i<count($arr); $i++){
		for($j=$i+1; $j<count($arr); $j++){
			if($arr[$i]>$arr[$j]){
				$temp = $arr[$j];
				$arr[$j] = $arr[$i];
				$arr[$i] = $temp;
            }
        }         
    }
echo "After Sorting".PHP_EOL;
print_r($arr);