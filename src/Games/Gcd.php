<?php

namespace BrainGanes\Gcd;

use function BrainGames\Engine\engine;
use function BrainGames\Engine\initData;

function gcd()
{
    [$count, $rounds, $data] = initData();

    while ($count < $rounds) {
        $a = rand(1, 100);
        $b = rand(1, 100);

        $max = max($a, $b);
        $min = min($a, $b);

        $question = "$a $b";
        $data[$question] = getGcd($min, $max);
        $count += 1;
    }
    $task = 'Find the greatest common divisor of given numbers.';
    engine($data, $task);
}

function getGcd(int $min, int $max): int
{
    $result = [];

    for ($i = 1; $i <= $min; $i++) {
        if ($max % $min === 0) {
            return $min;
        }

        if ($max % $i === 0 && $min % $i === 0) {
            $result[] = $i;
        }

    }

    return max($result);
}