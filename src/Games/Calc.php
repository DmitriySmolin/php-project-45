<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;
use function BrainGames\Engine\initData;
use function cli\line;
use function cli\prompt;

function calc(): void
{
    [$count, $rounds, $data] = initData();

    $operations = ['+', '-', '*'];

    while ($count < $rounds) {

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

function calcOperation($firstNum, $secondNum, $operation)
{
    switch ($operation) {
        case '*':
            return $firstNum * $secondNum;
        case '+':
            return $firstNum + $secondNum;
        case '-':
            return $firstNum - $secondNum;
    }
}

