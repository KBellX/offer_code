<?php

/**
 * 思路：与跳台阶同理，第一次，横着放，则剩下n-1列，竖着放，其旁边的必然要竖着放，则剩下n-2列
 * 
 * f(n) = f(n-1) + f(n-2) (n>2)
 */

function rectCover($number)
{
    if($number <= 0){
        return 0;
    }
    
    $i = 1;
    $j = 2;
    
    while(--$number > 0){
        $j += $i;
        $i = $j - $i;
    }
    
    return $i;
}