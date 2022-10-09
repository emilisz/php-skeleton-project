<?php declare(strict_types=1);

namespace Models;

class Homework
{
    public $a;
    public $b;

    public function __construct(int $a, int $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public static function substract(int $a, int $b)
    {
        return $a/$b;
    }

    public static function print(int $a, int $b) :string
    {
        return 'this result is: '. $a/$b;
    }
}