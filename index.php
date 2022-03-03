<?php
// declare(strict_types=1);

// $list=[1,2,3,4,5,6,8,9,10];
 

// function map ($array , $func) {
//     $newList =[];
//     foreach ($array as $key => $item) {
//         $newList[$key] = $func($item);
//     }
//     return $newList;
// }

// function doS($num) {
//     return $num * 2;
// }

// function doS2($num) {
//     return $num ** 2; 
// }
// var_dump(map($list , 'doS2'));
// var_dump (map($list , 'doS'));


$c = 5;
$sum = fn($a,$b) => $a+$b+$c;
var_dump($sum(1,2));