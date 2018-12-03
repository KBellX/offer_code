<?php

/**
 * 递归，分治思想
 * 每次只要处理根节点的值，左节点指向，右节点指向。
 * 
 * 要化成递推，应该要用栈存储节点，与深度遍历二叉树同理。
 */

/*
class TreeNode{
    var $val;
    var $left = NULL;
    var $right = NULL;
    function __construct($val){
        $this->val = $val;
    }
}
*/
function reConstructBinaryTree($pre, $vin)
{
    $length = count($pre);
    if($length == 0){
        return NULL;
    }
    
    // 处理根节点的值
    $node = new TreeNode($pre[0]);
    
    $leftPre = $leftVin = $rightPre = $rightVin = [];
    $index = 0;
    for($i=0; $i<=$length-1; $i++){
        if($vin[$i] == $pre[0]){
            $index = $i;
            break;
        }
    }
    
    // 处理左子节点指向
    $leftPre = array_slice($pre, 1, $index);
    $leftVin = array_slice($vin, 0, $index);
    $node->left = reConstructBinaryTree($leftPre, $leftVin);
    // 处理右子节点指向
    $rightPre = array_slice($pre, $index+1);
    $rightVin = array_slice($vin, $index+1);
    $node->right = reConstructBinaryTree($rightPre, $rightVin);

    return $node;
}