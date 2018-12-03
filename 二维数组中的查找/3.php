<?php
/**
 * 运行时间：225ms
 * 占用内存：4724k
 * 
 * 时间复杂度：m+n
 */

function Find($target, $array)
{
    $m = count($array) - 1;
    $n = count($array[0]) - 1;    // 需要考虑空数组情况吗？
    $i = $m;
    $j = 0;

    while($i >= 0 && $j <= $n){
        if($target > $array[$i][$j]){
            $j++;
        }else if($target == $array[$i][$j]){
            return true;
        }else {
            $i--;
        }
    }
    
    return false;
}