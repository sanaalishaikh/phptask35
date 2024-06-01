<?php
function sortArray($arr) {
    sort($arr);
    return $arr;
}

$array = [4, 2, 8, 1, 6, 3, 5, 7];
$sortedArray = sortArray($array);

echo "Sorted Array: ";
foreach($sortedArray as $val) {
    echo $val . " ";
}
?>