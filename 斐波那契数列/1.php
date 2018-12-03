<?php

function Fibonacci($n)
{
    $arr = [];
    $i = 1;
    $arr[0] = 0;
    $arr[1] = 1;
    
    while($i < $n){
        $arr[++$i] = $arr[$i-1] + $arr[$i-2];
    }
    
    return $arr[$n];
}