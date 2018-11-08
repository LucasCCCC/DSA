<?php
/**
 * Bubble() 冒泡排序
 * @param $array 未排序的数组
 * @return mixed $array 已排序的数组
 */
function Bubble($array){
    for ($i = 0; $i < count($array)-1; $i++) {
        for ($j = 0; $j < count($array)-$i-1; $j++) {
            if ($array[$j] < $array[$j+1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }
    return $array;
}
