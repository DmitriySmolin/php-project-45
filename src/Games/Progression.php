<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS;

function progression(): void
{
    $question = 'What number is missing in the progression?';
    $data = [];

    for ($i = 0; $i < ROUNDS; $i += 1) {
        $num = rand(1, 25);
        $step = rand(1, 10);

        [$numericalSequence, $hiddenElement] = replaceElement(createProgression($num, $step));
        $string = implode(' ', $numericalSequence);
        $data[$string] = $hiddenElement;
    }
    engine($data, $question);
}


function createProgression(int $num, int $step): array
{
    $numericalSequence = [];
    for ($i = $num, $j = 1; $j <= 10; $j += 1, $i += $step) {
        $numericalSequence[] = $i;
    }

    return $numericalSequence;
}

function replaceElement(array $data): array
{
    $randomKey = rand(1, 9);
    $hiddenElement = $data[$randomKey];
    $data[$randomKey] = '..';
    return [$data, $hiddenElement];
}
