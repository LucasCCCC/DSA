<?php
// 小易觉得高数课太无聊了，决定睡觉。不过他对课上的一些内容挺感兴趣，
// 所以希望老师讲到有趣的地方的时候叫醒他一下。你知道了小易对一堂课每
// 分钟知识点的感兴趣程度，并以分数量化，以及他在这堂课上每分钟是否会
// 睡着，你可以叫醒他一次，这会使得他在接下来的k分钟内保持清醒。你需要
// 选择一种方案最大化小易这堂课听到的知识点分值。

/*
 *输入描述：
 *第一行：$n $k(1 <= n, k <= 10^5)，表示这堂课持续多少分钟，以及叫醒小易一次使他能够保持清醒的时间。
 *第二行n个数，分别表示小易对每分钟知识点的感兴趣评分。
 *第三行n个数，分别表示每分钟小易是否清醒，1表示清醒。
 */

/*
 *输出描述:
 *小易这堂课听到的知识点的最大兴趣值。
 */

/**
 *思路分析：
 *小易的兴趣值，应由两部分，或者说更细分的三部分组成。
 *  1.baseScore,即左右上课中，除去被叫醒的$k分钟，小易的兴趣值。又可细分为两部分:
 *      $baseScore_left与$baseScore_right,即小易被叫醒前的兴趣值与被叫醒的$k分钟结束后的兴趣值。
 *  2.$awakenScore，即小易被叫醒的$k分钟内的兴趣值。
 */
 while ((fscanf(STDIN,'%d %d',$n,$k)) == 2) {
     $intrestScore = explode(' ', trim(fgets(STDIN)));
     $sleep = explode(' ', trim(fgets(STDIN)));

     $sum = 0;
     for ($i = 0; $i < $n; $i++) {
         if ($sleep[$i] == 1) {
             $sum += $intrestScore[$i];
         }
         $baseScore_left[$i] = $sum;
     }

     $sum = 0;
     for ($i = $n-1; $i > -1; $i--) {
         if ($sleep[$i] == 1) {
             $sum += $intrestScore[$i];
         }
         $baseScore_right[$i] = $sum;
     }

     $sum = 0;
     for ($i = 0; $i < $n; $i++) {
         $sum += $intrestScore[$i];
         $awakenScore[$i] = $sum;
     }

     $max = -1;
     for ($i=0; $i < $n; $i++) {
         if ($sleep[$i] == 0) {
             $temp = 0;
             $temp += ($i-1) < 0 ? 0 : $baseScore_left[$i];
             $temp += ($i+$k) >= $n ? 0 : $baseScore_right[$i+$k];
             $temp += $awakenScore[min($i+$k-1,$n-1)] - (($i-1) < 0 ? 0 : $awakenScore[$i-1]);
             if ($max < $temp) {
                 $max = $temp;
             }
         }
     }
     echo $max."\n";
 }
?>
