<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;
use const BrainGames\Engine\ROUNDS;

function even(): void
{
    $data = [];
    $count = 0;

    while ($count < ROUNDS) {
        $num = rand(1, 100);
        $data[$num] = isEven($num) ? 'yes' : 'no';
        $count += 1;
    }
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($data, $task);
}

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
