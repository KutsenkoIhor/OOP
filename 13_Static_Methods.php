<?php

namespace App;

class Time
{
    private $h;
    private $m;

    // BEGIN (write your solution here)
    public static function fromString($str)
    {
        $arr = explode(":", $str);
        return new Time($arr[0], $arr[1]);
    }

    // END

    public function __construct($h, $m)
    {
        $this->h = $h;
        $this->m = $m;
    }

    public function __toString()
    {
        return "{$this->h}:{$this->m}";
    }
}

$time = new Time(10, 15);
echo $time;
echo "\n";
$time2 = Time::fromString('10:23');
echo $time2;
//$this->assertEquals('10:23', $time);