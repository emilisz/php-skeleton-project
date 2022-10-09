<?php

use PHPUnit\Framework\TestCase;
use Models\Homework;

final class HomeworkTest extends TestCase
{

    public function testClassConstructor()
    {
        $homework = new Homework(18, 4);

        $this->assertSame(18, $homework->a);
        $this->assertSame(4, $homework->b);
    }

    public function testClassSubstractMethodReturnsNumber()
    {
        $homework = new Homework(18, 4);

        $this->assertIsNumeric($homework->substract(18, 4));
    }

    public function testClassPrintReturnsString()
    {
        $homework = new Homework(18, 4);

        $this->assertIsString($homework->print(18, 4));
    }
}
