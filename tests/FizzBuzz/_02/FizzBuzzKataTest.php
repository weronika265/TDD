<?php

namespace Test\FizzBuzz\_02;

use App\FizzBuzz\_02\FizzBuzzKata;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase {
    public function testFizzBuzz(): void {
        // given
        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();
        $expected = [];

        // when
        $actual = $fizzBuzzKata->getValue();

        // then
        $this->assertSame($expected, $actual);
    }
}