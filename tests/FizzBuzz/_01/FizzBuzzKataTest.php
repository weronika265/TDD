<?php

namespace Test\FizzBuzz\_01;

use App\FizzBuzz\_01\FizzBuzzKata;
use Generator;
use PHPUnit\Framework\TestCase;

class FizzBuzzKataTest extends TestCase {

    /**
     * @param int $input Input value
     * @param string $expected Expected return value
     * @dataProvider dataProviderForTestFizzBuzz
     * @return void Check if inputted and expected values are the same.
     */
    public function testFizzBuzz(int $input, string $expected): void {
        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();
        $actual = $fizzBuzzKata->getValue($input);
        $this->assertSame($expected, $actual);
    }

    public function dataProviderForTestFizzBuzz(): Generator {
        yield 'value for number 1' => [
            'input' => 1,
            'expected' => '1',
        ];
        yield 'value for number 3' => [
            'input' => 3,
            'expected' => 'Fizz',
        ];
        yield 'value for number 5' => [
            'input' => 5,
            'expected' => 'Buzz',
        ];
        yield 'value for number 15' => [
            'input' => 15,
            'expected' => 'FizzBuzz',
        ];
    }

    public function dataProviderForTestFizzBuzz_WhenOutOfRangeExceptionIsRaised(): Generator {
        yield 'value for number 102' => [
            'input' => 102,
            'expected' => \OutOfRangeException('Invalid number'),
        ];
    }

    public function testFizzBuzz_WhenOutOfRangeExceptionIsRaised(int $number, string $exception): void
    {
        $this->expectException($exception);

        $fizzBuzzKata = new FizzBuzzKata();
        $fizzBuzzKata->fizzBuzz();

        $fizzBuzzKata->getValue($number);
    }
}