<?php

/**
 * 二进制中1的个数
 * 输入一个整数，输出该数二进制表示中1的个数。其中负数用补码表示。
 *
 * @param $n
 * @return int $count 1的个数
 */
function NumberOf1($n)
{
    $count = 0;
    if($n < 0){
        $count++;
        $n = $n&0x7FFFFFFF;
    }

    //重复将最低位的1变为0，并记录这一操作执行的次数，直到$n变为0
    while($n != 0){
        $count++;
        $n = $n&($n-1);
    }
    return $count;
}

/**
 * 方法二：将二进制字符串中的0删去，统计剩余字符串的长度即可
 *
 * 特别备注：Windows下的PHP，只有在PHP7及以上版本支持64位，
 * 64位系统的整形的最大值为(2^63)-1,最小值为-(2^63)，32位
 * 系统下的整形最大值为(2^31)-1,最小值为-(2^31)。
 * 
 * @param $n
 * @return int 1的个数
 */
function NumberOf1_2($n)
{
    $binN = decbin($n);

    return strlen(str_replace('0','',$binN));
}
