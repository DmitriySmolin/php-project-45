<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;
use function BrainGames\Engine\initData;

function even(): void
{
    [$count, $rounds, $data] = initData();

    while ($count < $rounds) {
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
