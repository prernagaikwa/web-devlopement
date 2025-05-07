<?php
    $a=20;
    if($a>=18){
        echo "eligible for vote"."<br/>";
    }
    else{
        echo "not eligible"."<br/><br/>";
    }

    for($i=0;$i<10;$i++){
        echo "value of i is $i"."<br/>";
    }

    $b=2;
    switch($b){
        case 1:
            echo "value of b is 1"."<br/><br/>";
            break;
        case 2:
            echo "value of b is 2"."<br/><br/>";
            break;
        case 3:
            echo "value of b is 3"."<br/><br/>";
            break;
        default:
            echo "value of b is not in range"."<br/><br/>";
    }
?>