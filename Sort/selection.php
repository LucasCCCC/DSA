<?php

function selection_sort($array){
    $count = count($array);
    for($i = 0;$i < $count-1;$i++){
        $min = $i;
        echo'$min-->'.$array[$min].'-->';
        for($j = $i+1;$j < $count;$j++){
            //由小到大排列
            if($array[$min] > $array[$j]){
                //表明当前最小的还比当前的元素大
                $min = $j;
                //赋值新的最小的
            }
        }
        echo$array[$min].'coco<br/>';
        /*swap$array[$i]and$array[$min]即将当前内循环的最小元素放在$i位置上*/
        if($min!=$i){
            $temp=$array[$min];
            $array[$min]=$array[$i];
            $array[$i]=$temp;
        }
    }
    return$array;
}