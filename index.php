<?php

$mang = array(
    array(1,3,5,8,5,7,9),
    array(3,5,7,98,34,5,1)
);
$max = $mang[0][0];
 for ($i = 0; $i < count($mang); $i++){
     for ($j = 0; $j < count($mang[$i]); $j++) {
         if ($max < $mang[$i][$j]) {
             $max = $mang[$i][$j];
         }
     }
 }
 echo $max;