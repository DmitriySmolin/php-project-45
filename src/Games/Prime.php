<?php

namespace BrainGanes\Prime;
use function BrainGames\Engine\engine;
use const BrainGames\Engine\ROUNDS;

function prime(): void
{
    $data = [];
    $count = 0;

    while ($count < ROUNDS) {
        $num = rand(1, 100);
        $data[$num] = isPrime($num) ? 'yes' : 'no';
        $count += 1;
    }

    $task = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    engine($data, $task);
}

function isPrime(int $num): bool
{
    $result = [];
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i === 0) {
            $result[] = $i;
        }
    }
    return count($result) === 2;
}
