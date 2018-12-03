<?php
/**
 * 思路：
 *  目标元素与当前元素相差d 决定了 当前元素 向前移动至少 d 才有可能 等于目标元素
 *  时间复杂度 小于n，与n没太大关系。
 * 
 * 思路2:
 *  直接遍历，时间复杂度n
 */

$array = [
    1,2,3,4,3,2,1,2,3,4,5, 6, 5
];

$target = 5;
$result = Find($target, $array);
var_dump($result);

function Find($target, $array)
{
    if(!isset($array[0])){
        return -1;
    }

    $i = 0;
    $d = $target - $array[$i];
    while($d){
        $i += $d;
        if(!isset($array[$i])){
            return -1;
        }
        $d = $target - $array[$i];
    }

    return $i;
}