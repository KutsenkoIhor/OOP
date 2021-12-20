<?php

class Rational
{
    public $numer;
    public $denom;

    public function __construct($x, $y)
    {
        $this->numer = $x;
        $this->denom = $y;
    }

    public function getNumer()
    {
        return $this->numer;
    }

    public function getDenom()
    {
        return$this->denom;
    }

    public function add($objRat)
    {
        return new Rational((($objRat->numer * $this->denom) + ($this->numer * $objRat->denom)),
            ($this->denom * $objRat->denom));
    }

    public function sub($objRarSub)
    {
        return new Rational((($this->numer * $objRarSub->denom) - ($objRarSub->numer * $this->denom)),
            ($this->denom * $objRarSub->denom));
    }
}

$rat1 = new Rational(3, 9);
print_r($rat1->getNumer());
echo "\n";
$rat2 = new Rational(10, 3);
$rat3 = $rat1->add($rat2);
print_r($rat3->getNumer()); // 99
echo "\n";
print_r($rat3->getDenom()); // 27
echo "\n";
$rat4 = $rat1->sub($rat2); // Абстракция для рационального числа -81/27
print_r($rat4->getNumer()); // -81
echo "\n";
print_r($rat4->getDenom()); // 27