<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS_COUNT;

function run(): void
{
    $question = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num = rand(1, 100);
        $data[$num] = isEven($num) ? 'yes' : 'no';
    }
    engine($data, $question);
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
