<?php

namespace point;

class Point
{
    public $x;
    public $y;
}

function getMidpoint($p1, $p2)
{
    $mid= new Point();
    $mid->x = ($p1->x + $p2->x) / 2;
    $mid->y = ($p1->y + $p2->y) / 2;
    return $mid;
}


$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;

$midpoint = getMidpoint($point1, $point2);
print_r($midpoint->x); // 5.5
echo "\n";
print_r($midpoint->y); // 5.5