<?php

namespace App;

class Timer
{
    public const SEC_PER_MIN = 60;
    // BEGIN (write your solution here)
    public const SEC_PER_HOUR = 3600;
    public $secondsCount;

    public function __construct($sec, $min = 0, $god = 0)
    {
        $this->secondsCount = $sec + ($min * self::SEC_PER_MIN) + ($god * self::SEC_PER_HOUR);
    }
    // END
    public function getLeftSeconds()
    {
        return $this->secondsCount;
    }

    public function tick()
    {
        $this->secondsCount--;
    }
}

$timer1 = new Timer(10);
print_r($timer1->getLeftSeconds()); // 10
echo "\n";
$timer1->tick();
print_r($timer1->getLeftSeconds()); // 9
echo "\n";
$timer2 = new Timer(8, 20, 8);
print_r($timer2->getLeftSeconds()); // 30008