<?php

$x = 750;
$y = 2123;
$z = 150;

if( ($x == $y) && ($z==$x) ) {
    echo "x, y and z are equal<br>";
}

    elseif( ($x > $y) && ($x > $z) ) {
        echo "x is the largest value<br>";
    }
    if( ($y > $x) && ($y > $z) ) {
        echo "y is the largest value<br>";
    }
    if( ($z > $x) && ($z > $y) ) {
        echo "z is the largest value<br>";
    }

        if( ($x < $y) && ($x < $z) ) {
            echo "x is the smallest value<br>";
        }
        if( ($y < $x) && ($y < $z) ) {
            echo "y is the smallest value<br>";
        }
        if( ($z < $x) && ($z < $y) ) {
            echo "z is the smallest value<br>";
        }
echo "<hr>";

$situation = "dsgfs fsfd sfmotamoti";
switch($situation){

    case 'begotik':
        echo "palao..."; break;

    case 'valo':
        echo "relax..."; break;

    case 'motamoti':
        echo "do it again"; break;

    default:
        echo "leave me alone";
}
