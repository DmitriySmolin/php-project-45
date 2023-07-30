<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function run(): void
{
    $question = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num = rand(1, 100);
        $data[$num] = isPrime($num) ? 'yes' : 'no';
    }

    runEngine($data, $question);
}

function isPrime(int $num): bool
{
    if ($num === 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i += 1) {
        if ($num % $i === 0) {
            return false;
        }
    }

    return true;
}
