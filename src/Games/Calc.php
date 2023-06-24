<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\engine;
use function cli\line;
use function cli\prompt;

function calc()
{
    $assocArray = [];
    $operations = ['+', '-', '*'];
    $count = 0;
    while ($count < 3) {

        $a = rand(1, 100);
        $b = rand(1, 100);
        if ($a < $b) {
            $temp = $b;
            $b = $a;
            $a = $temp;
        }
        $randomKey = array_rand($operations);
        $operation = $operations[$randomKey];

        $c = calcOperation($a, $b, $operation);
        $question = "$a $operation $b";

        $assocArray[$question] = $c;
        $count += 1;
    }
    $task = 'What is the result of the expression?';
    engine($assocArray, $task);
}

function calcOperation($a, $b, $operation)
{
    switch ($operation) {
        case '*':
            return $a * $b;
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
    }
}

