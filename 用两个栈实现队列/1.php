<?php

/**
 * 思路1:
 *  每次出栈都 先将栈1元素“倒进”栈2，出了栈2的一个，再将栈2“倒”回栈1
 *  这是最直观的思路，但效率明显不如第二种
 */

$stack1 = [];
$stack2 = [];

function mypush($node)
{
    global $stack1;
    $stack1[] = $node;
}
function mypop()
{
    global $stack1, $stack2;
    while($val = array_pop($stack1)){
        $stack2[] = $val;
    }
    
    $pop = array_pop($stack2);
    
    while($val = array_pop($stack2)){
        $stack1[] = $val;
    }
    
    return $pop;
}