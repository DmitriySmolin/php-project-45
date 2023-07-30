<?php

namespace Games\BrainGames\Progression;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function run(): void
{
    $question = 'What number is missing in the progression?';
    $data = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $num = rand(1, 25);
        $step = rand(1, 10);
        $randomKey = rand(1, 9);

        $numericalSequence = createProgression($num, $step);
        $correctAnswer = $numericalSequence[$randomKey];
        $numericalSequence[$randomKey] = '..';
        $questionContent = implode(' ', $numericalSequence);
        $data[$questionContent] = $correctAnswer;
    }
    runEngine($data, $question);
}


function createProgression(int $start, int $progressionStep): array
{
    $numericalSequence = [];
    for ($index = 1; $index <= 10; $index += 1) {
        $numericalSequence[] = $start + $progressionStep * $index;
    }

    return $numericalSequence;
}
