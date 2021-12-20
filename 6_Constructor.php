<?php

//require_once 'tests.php';
//require_once 'teees.php';
//use App\Point;
//use App\Segment;

function reverse($obj)
{
    $second = new Point($obj->beginPoint->x, $obj->beginPoint->y); //$obj->beginPoint;
    $first = new Point($obj->endPoint->x, $obj->endPoint->y); //$obj->endPoint ;
    return new Segment($first, $second);
}

class Segment
{
    public $beginPoint;
    public $endPoint;

    public function __construct($x, $y)
    {
        $this->beginPoint = $x;
        $this->endPoint = $y;
    }
}