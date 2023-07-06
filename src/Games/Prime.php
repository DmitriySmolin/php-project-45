<?php

namespace BrainGanes\Prime;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS;

function prime(): void
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    for ($i = 0; $i < ROUNDS; $i += 1) {
        $num = rand(1, 100);
        $data[$num] = isPrime($num) ? 'yes' : 'no';
    }

    engine($data, $question);
}

function isPrime(int $num): bool
{
    $dividers = [];
    for ($i = 2; $i <= $num; $i++) {
        if ($num % $i === 0) {
            $dividers[] = $i;
        }
    }
    return count($dividers) === 1;
}
