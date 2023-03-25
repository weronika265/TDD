<?php

namespace App\FizzBuzz\_01;

class FizzBuzzKata {
    public function fizzBuzz(): void {
        for($i = 1; $i <= 100; $i++) {
            if ($this->isDivisableByThree($i) && $this->isDivisableByFive($i)) {
                $this->result[$i] = 'FizzBuzz';
            }
            else if ($this->isDivisableByThree($i)) {
                $this->result[$i] = 'Fizz';
            }
            else if ($this->isDivisableByFive($i)) {
                $this->result[$i] = 'Buzz';
            }
            else {
                $this->result[$i] = (string) ($i);
            }
        }
    }

    public function getValue(int $number): string {
        if(!isset($this->result[$number])) {
            throw new \OutOfRangeException('Invalid number');
        }
        return $this->result[$number];
    }

    private function isDivisableByThree(int $number): bool {
        return $number % 3 === 0;
    }

    private function isDivisableByFive(int $number): bool {
        return $number % 5 === 0;
    }
}