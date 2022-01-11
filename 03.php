<?php

    $arr = [];

    for($i = 0; $i <= 20; $i++){
        $a = rand(1,10);
        $arr[] = $a;
    }

    $repeated = array_count_values($arr);
    $unique = [];

    foreach($repeated as $key => $val){
        if($val == 1){
            $unique[] = $key;
        }
    }

    echo "<pre>";
    echo "Input: ";
    print_r($arr);
    echo "Output: ";
    print_r($unique);
