<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;
use function BrainGames\Engine\initData;
use function cli\line;
use function cli\prompt;

function even(): void
{
    [$count, $rounds, $data] = initData();

    while ($count < $rounds) {
        $num = rand(1, 100);
        if ($num % 2 === 0) {
            $data[$num] = 'yes';
        } else {
            $data[$num] = 'no';
        }
        $count += 1;
    }
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($data, $task);
}
