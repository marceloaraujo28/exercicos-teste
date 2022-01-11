<?php

    function remove($arr){
        
        $erro = 0;

        for($i = 0; $i <= count($arr); $i++){
            

            if($arr[$i] == end($arr)){
                if($arr[$i] > $arr[$i - 1]){
                    $erro = 0;
                }
            }elseif($arr[$i] > $arr[$i + 1]){
                $erro = 1;
            }
        }

        if($erro == 0){
            return true;
        }else{
            return false;
        }
    }


    $arr = [1,2,3,4,5];
    print_r(remove($arr));
