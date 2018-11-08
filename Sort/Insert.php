<?php
/**
 * 插入排序
 * @param $array 未排序的数组
 * @return mixed $array 已排序的数组
 */
    function insertionSort($array){
        for($i = 1;$i < count($array);$i++){
            $tmp = $array[$i];
            $key = $i-1;
            while($key >= 0 && $tmp < $array[$key]){
                $array[$key+1] = $array[$key];
                $key--;
            }
            if(($key+1) != $i)
                $array[$key+1] = $tmp;
        }
        return $array;
    }
 ?>
