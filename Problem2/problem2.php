<?php

    function judgeB($a, $b, $c){
        $ans = false;
        if(($a-$b) * ($c-$b) > 0 && $a != $c){
            $ans = true;
        }
        return $ans;
    }

    function calcMiddleCount($a, $b, $c){
        $ans = 0;
        //A >= C
        if($a < $c){
            $swap = $a;
            $a = $c;
            $c = $swap;
        }else if($a == $c){
            $c -= 1;
            if($c <= 0){
                return -1;
            }
            $ans += 1;
        }

        //A > C
        if(judgeB($a, $b, $c)){
            return $ans;
        }
        
        //A >= B >= C
        if($b > 1 && $c > 1){
            if($b-1 == $c){
                if($b - 2 <= 0){
                    return -1;
                }
                $ans += min($a-$b+2, $b-$c+1);
            }else{
                $ans += min($a-$b+1, $b-$c+1);
            }
            return $ans;
        }else{
            return -1;
        }
        return $ans;
    }

    $n = fgets(STDIN);
    for($i = 0; $i < $n; $i++){
        $a_b_c = explode(" ", fgets(STDIN));
        $A[$i] = $a_b_c[0];
        $B[$i] = $a_b_c[1];
        $C[$i] = $a_b_c[2];
    }

    for($i = 0; $i < $n; $i++){
        echo calcMiddleCount((int)$A[$i], (int)$B[$i], (int)$C[$i]);
        echo "\n";
    }


    