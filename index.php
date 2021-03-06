<?php


$arr1 = [1,5,34,54,78,562,655,864,6543,6632,7777,7778,46266,24562];

// binary
 
 $before = microtime(true);

    function findBinary($searchFor, $array) {

        $start = 0;
        $end = count($array) ;

        sort($array);
       
        while ($start <= $end) {
            $position = floor(($end + $start) / 2);
            if ($array[$position] > $searchFor) {
                $end = $position -1;
            } elseif ($array[$position] < $searchFor) {
                $start = $position +1;
            } elseif ($array[$position] == $searchFor) {
                return $position;
            }
        } return 'not found';
    }

    echo'<br>';
    echo(findBinary(46266, $arr1));
    echo'<br>';
    
 $after = microtime(true);
 
 echo 'Time taken:' . ($after-$before);

//  linear
 
 $before = microtime(true);

    function findLinear($searchFor, $array) {
    
        foreach ($array as $key=>$value) {
            if ($value == $searchFor) {
                return $key;
            }
        } return 'not found';
    }

    echo'<br>';
    echo findLinear(24562, $arr1);
    echo'<br>';

 $after = microtime(true);
 
 echo 'Time taken:' . ($after-$before);