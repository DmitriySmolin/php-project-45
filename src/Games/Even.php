<?php

namespace BrainGames\Even;

use function BrainGames\Engine\engine;
use function cli\line;
use function cli\prompt;

function even()
{
    $assocArray = [];
    $count = 0;
    while ($count < 3) {
        $num = rand(1, 100);
        if ($num % 2 === 0) {
            $assocArray[$num] = 'yes';
        } else {
            $assocArray[$num] = 'no';
        }
        $count += 1;
    }
    $task = 'Answer "yes" if the number is even, otherwise answer "no".';
    engine($assocArray, $task);
}
