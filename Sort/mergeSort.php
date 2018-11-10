<?php

/**
 * 归并排序的主体部分，切割数组后进行递归的排序与合并
 * @param array $arr 需要排序的数组
 * @return array $arr 已排好序的数组
 */
function mergeSort($arr){

    $size = count($arr);

    if ($size == 1){
        return $arr;
    }

    $mid= $size >> 1;
    $leftArray = array_slice($arr, 0, $mid);
    $rightArray = array_slice($arr, $mid);

    $x = mergeSort($leftArray);
    $y = mergeSort($rightArray);

    return mergeArray($x, $y);
}


/**
 * 排序与合并数组
 * @param array $arrayA
 * @param array $arrayB
 * @return array|bool 已排序并且合并后的数组|如果其中一个数组为空，则返回非空的数组|如果两个数组都为空，返回false
 */
function mergeArray($arrayA, $arrayB){
    if (empty($arrayB) && empty($arrayA)){
        return false;
    }
    if (empty($arrayB)){
        return $arrayA;
    }
    if (empty($arrayA)){
        return $arrayB;
    }

    $i = $j = 0;
    while ($i < count($arrayA) && $j < count($arrayB)){
        if ($arrayA[$i] < $arrayB[$j]){
            $arrayC[] = $arrayA[$i];
            $i++;
        }else {
            $arrayC[] = $arrayB[$j];
            $j++;
        }
    }

    if (isset($arrayA[$i])){
        $arrayC = array_merge($arrayC, array_slice($arrayA, $i));
    }else{
        $arrayC = array_merge($arrayC, array_slice($arrayB, $j));
    }
    return $arrayC;

}
?>