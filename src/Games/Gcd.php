<?php

namespace BrainGanes\Gcd;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS;

function gcd(): void
{
    $data = [];
    $count = 0;

    while ($count < ROUNDS) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);

        $max = max($firstNum, $secondNum);
        $min = min($firstNum, $secondNum);

        $question = "$firstNum $secondNum";
        $data[$question] = getGcd($min, $max);
        $count += 1;
    }
    $task = 'Find the greatest common divisor of given numbers.';
    engine($data, $task);
}

function getGcd(int $min, int $max): int
{
    for ($i = $max; $i > 0; $i -= 1) {
        if ($max % $i === 0 && $min % $i === 0) {
            return $i;
        }
    }
    return 1;
}
