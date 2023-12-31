<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function run(): void
{
    $question = 'Find the greatest common divisor of given numbers.';
    $data = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);

        $max = max($firstNum, $secondNum);
        $min = min($firstNum, $secondNum);

        $questionContent = "$firstNum $secondNum";
        $data[$questionContent] = getGcd($min, $max);
    }
    runEngine($data, $question);
}

function getGcd(int $min, int $max): int
{
    for ($i = $min; $i > 0; $i -= 1) {
        if ($max % $i === 0 && $min % $i === 0) {
            return $i;
        }
    }
    return 1;
}
