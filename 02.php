<?php 
    
    function Primos($inicial, $final){

        $list = [];

        for($i = $inicial+1; $i < $final; $i++){
            $counter = 0; 

                for($j=1;$j<=$i;$j++){ 
                    if($i % $j==0){ 
                        $counter++;
                     }
                } 
            if($counter==2){
                    $list[] = $i;
             }
        }

        print_r($list);
    }

Primos(10,29)


?>