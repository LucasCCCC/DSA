<?php
/**
 * @param $arr
 * @return array 已排序的数组
 */
function quickSort($arr){

  // 获取数组长度
  $length = count($arr);

  // 判断长度是否需要继续二分比较
  if($length <= 1){
    return $arr;
  }

  // 定义基准元素
  $base = $arr[0];

  // 定义两个空数组，用于存放和基准元素的比较后的结果
  $left = [];
  $right = [];

  // 遍历数组
  for ($i=1; $i < $length; $i++) {

    // 和基准元素作比较
    if ($arr[$i] > $base) {
      $right[] = $arr[$i];
    }else {
      $left[] = $arr[$i];
    }

  }

  // 然后递归分别处理left和right
  $left = quickSort($left);
  $right = quickSort($right);

  // 合并
  return array_merge($left,[$base],$right);

}
 ?>
