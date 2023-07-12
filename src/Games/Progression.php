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
        $randomKey = rand(1, 9);

        $numericalSequence = createProgression($num, $step);
        $correctAnswer = $numericalSequence[$randomKey];
        $numericalSequence[$randomKey] = '..';
        $questionContent = implode(' ', $numericalSequence);
        $data[$questionContent] = $correctAnswer;
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
