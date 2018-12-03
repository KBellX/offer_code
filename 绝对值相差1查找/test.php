<?php

/**
 * 一维数组元素前后元素相差绝对值为1，求指定元素的数组索引，若有多个，返回第一次出现的。
 * 若不存在，返回-1
 */

$array = [
    1,2,3,4,3,2,1,2,3,4,5, 6, 5
];

$target = 5;

$result = Find($target, $array);
var_dump($result);