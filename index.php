<?php

function getStrings($numb){
    $countStars = $numb - 1;
    $countLattice = 1;

    for($i = $numb; $i > 0; $i--){
        $string = "";

        for($s = $countStars; $s > 0; $s--){
            $string .= "*";
        }

        for($l = 0; $l < $countLattice; $l++){
            $string .= "#";
        }

        $countStars -= 1;
        $countLattice += 1;

        echo $string . "<br>";
    }
}

echo getStrings(4);