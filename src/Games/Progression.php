<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

function progression()
{
    $data= [];
    $count = 0;
    while ($count < 3) {
        $num = rand(1, 25);
        $step = rand(1, 10);

        $count += 1;
        [$hiddenElement, $result] = createProgression($num, $step);
        $string = implode(' ', $result);
        $data[$string] = $hiddenElement;
    }
    $task = 'What number is missing in the progression?';
    engine($data, $task);
}

function createProgression($num, $step): array
{
    $result = [];
    for ($i = $num, $j = 1; $j <= 10; $j += 1, $i += $step) {
        $result[] = $i;
    }
    $hiddenKey = rand(1, 9);
    $hiddenElement = $result[$hiddenKey];
    $result[$hiddenKey] = '..';

    return [$hiddenElement, $result];
}