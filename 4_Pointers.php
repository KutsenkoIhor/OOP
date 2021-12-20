<?php

function dup($point)
{
    $point2 = new Point();
    $point2->x = $point->x;
    $point2->y = $point->y;
    return $point2;
}