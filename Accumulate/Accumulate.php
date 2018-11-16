<?php

/**
 * 求1+2+3+...+n，要求不能使用乘除法、for、while、
 * if、else、switch、case等关键字及条件判断语句（A?B:C）。
 *
 * 方法一
 *
 * @param $n
 * @return float|int
 */
function Sum_Solution1($n)
{
    return array_sum(range(1,$n));
}

/**
 * 方法二：递归实现
 * @param int $n
 * @param int $sum
 * @return int $sum
 */
function Sum_Solution2($n,&$sum)
{
    $n && Sum_Solution2($n-1,$sum);
    return ($sum += $n);
}