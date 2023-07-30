<?php

namespace Games\BrainGames\Calc;

use Exception;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

function run(): void
{
    $question = 'What is the result of the expression?';
    $data = [];
    $operations = ['+', '-', '*'];

    for ($i = 0; $i < ROUNDS_COUNT; $i += 1) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);

        $operation = $operations[array_rand($operations)];

        $result = calcOperation($firstNum, $secondNum, $operation);
        $questionContent = "$firstNum $operation $secondNum";

        $data[$questionContent] = $result;
    }
    runEngine($data, $question);
}


function calcOperation(int $firstNum, int $secondNum, string $operation): int
{
    return match ($operation) {
        '*' => $firstNum * $secondNum,
        '+' => $firstNum + $secondNum,
        '-' => $firstNum - $secondNum,
        default => throw new Exception('There is no such arithmetic operation...'),
    };
}
