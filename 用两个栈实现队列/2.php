<?php

/**
 * 思路2: 不用每次出栈都重复“倒”。
 *  栈1用来存进栈元素， 用栈2用来存出栈元素，只有当栈2空栈时，才从栈1倒，这样才会不影响栈2出栈。
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
    
    if(!count($stack2)){
        while(count($stack1)){
            $stack2[] = array_pop($stack1);
        }
    }
    
    return array_pop($stack2);
}