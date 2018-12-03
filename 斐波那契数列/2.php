<?php

/**
 *  这种方式更节省内存
 *  注意，为了形式上简洁，求第n个元素，实际把第n+1个也算出来了
 */

function Fibonacci($n)
{
    $f = 0;
    $next = 1;

    while($n-- > 0){
        $next += $f;    // 下下个元素
        $f = $next - $f;    // 下个元素
    }

    return $f;
}