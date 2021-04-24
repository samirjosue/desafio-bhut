<?php

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use src\Multiple;

class MultipleTest extends TestCase
{

    public function testMultiplo(){
        $multiple = new Multiple();
        $this->assertTrue($multiple->multiplo(99,3));
        $this->assertFalse($multiple->multiplo(100,3));
    }

    public function testTestMultiplo(){
        $multiple = new Multiple();
        $this->assertEquals("'BHUT'", $multiple->testMultiplo(99));
        $this->assertEquals("'IT'", $multiple->testMultiplo(5));
        $this->assertEquals("'BHUT TI'", $multiple->testMultiplo(15));
        $this->assertEquals(2, $multiple->testMultiplo(2));
        $this->assertEquals(4, $multiple->testMultiplo(4));
    }


}
