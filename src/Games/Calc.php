<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS;

function calc(): void
{
    $question = 'What is the result of the expression?';
    $data = [];
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < ROUNDS; $i += 1) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);

        $randomKey = array_rand($operations);
        $operation = $operations[$randomKey];

        $result = calcOperation($firstNum, $secondNum, $operation);
        $questionContent = "$firstNum $operation $secondNum";

        $data[$questionContent] = $result;
    }
    engine($data, $question);
}

function calcOperation(int $firstNum, int $secondNum, string $operation): int|null
{
    return match ($operation) {
        '*' => $firstNum * $secondNum,
        '+' => $firstNum + $secondNum,
        '-' => $firstNum - $secondNum,
        default => null,
    };
}
