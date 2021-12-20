<?php
namespace my_6_lesoon;
class Segment
{
    private $beginPoint;
    private $endPoint;

    public function __construct($beginPoint, $endPoint)
    {
        $this->beginPoint = $beginPoint;
        $this->endPoint = $endPoint;
    }

    public function getBeginPoint()
    {
        return $this->beginPoint;
    }

    public function getEndPoint()
    {
        return $this->endPoint;
    }
}

$segment = new Segment(3, 9);
print_r($segment->getBeginPoint());
print_r($segment->getEndPoint());