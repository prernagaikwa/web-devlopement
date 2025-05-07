<?php
    function sum($a,$b){
        $c=$a+$b;
        return $c;
    }

    function sub($a,$b){
        $c=$a-$b;
        return $c;
    }

    function multi($a,$b){
        $c=$a*$b;
        return $c;
    }

    function expo($a,$b){
        $c=$a**$b;
        return $c;
    }

    $add=sum(1,2);
    echo "addition is $add"."<br/>";

    $sub=sub(1,2);
    echo "substraction is $sub"."<br/>";

    $multi=multi(1,2);
    echo "multiplication is $multi"."<br/>";

    $e=expo(1,2);
    echo "exponential is $e"."<br/>";
?>