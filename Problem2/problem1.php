<?php
    $n_N = explode(" ", fgets(STDIN));
    $n = $n_N[0];
    $N = $n_N[1];

    $A = explode(" ", fgets(STDIN));

    $max = -1;
    $min = 1000;

    for($i = 0; $i < count($A); $i++){
        if($max < $A[$i]){
            $max = $A[$i];
        }
        if($min > $A[$i]){
            $min = $A[$i];
        }
    }
    if($N <= $max && $N >= $min){
        echo "Yes";
    }else{
        echo "No";
    }