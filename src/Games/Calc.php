<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;

use const BrainGames\Engine\ROUNDS;

function calc(): void
{
    $data = [];
    $count = 0;

    $operations = ['+', '-', '*'];

    while ($count < ROUNDS) {
        $firstNum = rand(1, 100);
        $secondNum = rand(1, 100);
        if ($firstNum < $secondNum) {
            [$firstNum, $secondNum] = [$secondNum, $firstNum];
        }
        $randomKey = array_rand($operations);
        $operation = $operations[$randomKey];

        $result = calcOperation($firstNum, $secondNum, $operation);
        $question = "$firstNum $operation $secondNum";

        $data[$question] = $result;
        $count += 1;
    }
    $task = 'What is the result of the expression?';
    engine($data, $task);
}

function calcOperation(int $firstNum, int $secondNum, string $operation): int|null
{
    if ($operation === '*') {
        return $firstNum * $secondNum;
    } elseif ($operation === '+') {
        return $firstNum + $secondNum;
    } elseif ($operation === '-') {
        return $firstNum - $secondNum;
    }
    return null;
}
