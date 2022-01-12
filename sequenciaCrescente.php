<?php

$arr = [1, 2, 5, 5, 5];

function sequenciaCrescente($arr){

    foreach ($arr as $key => $value) {
        $tmp_arr = $arr;
        unset($tmp_arr[$key]);     
        $tmp_arr_sort =  $tmp_arr;
        sort($tmp_arr_sort);    
        $tmp_arr_sort = array_unique($tmp_arr_sort);
        $tmp_arr_sort = implode(',', $tmp_arr_sort);
        $tmp_arr = implode(',', $tmp_arr );
        if ($tmp_arr_sort == $tmp_arr) {
            echo "true";
            return;                  
        }
    
    }
    echo "false"; 
}

sequenciaCrescente($arr)

?>
