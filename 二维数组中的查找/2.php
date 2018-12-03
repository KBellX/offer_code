<?php
/**
 * 运行时间：267ms
 * 占用内存：3832k
 * 
 * 时间复杂度：n^2
 */
function Find($target, $array)
{
    foreach($array as $row){
        foreach($row as $value){
            if($target == $value){
                return ture;
            }
        }
    }
    
    return false;
}
