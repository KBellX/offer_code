<?php
/**
 * 运行时间：240ms
 * 占用内存：5860k
 * 
 * 时间复杂度：nlog_2
 */
function Find($target, $array)
{
    foreach($array as $index => $row){
        if(binary_search($target, $row, 0, count($row)-1) != -1){
            return true;
        }
    }
    
    return false;
}
/*
二分查找
存在，返回索引；
不存在，返回-1
*/
function binary_search($target, $array, $start, $end)
{
    while($start < $end){
        $temp = ($start + $end) / 2;
        if($target < $array[$temp]){
            $end = $temp-1;
        }else if($target == $array[$temp]){
            return $temp;
        }else {
            $start = $temp+1;
        }  
    }
    
    if($target == $array[$start]){
        return $start;
    }else{
        return -1;
    }
    
    $temp = ($start + $end) / 2;
    if($target < $array[$temp]){
        return binary_search($target, $array, $start, $temp-1);
    }else if($target == $array[$temp]){
        return $temp;
    }else {
        return binary_search($target, $array, $temp+1, $end);
    }
}