<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function initData(): array
{
    $count = 0;
    $rounds = 3;
    $data = [];

    return [$count, $rounds, $data];
}

function engine($data, $task)
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($task);
    foreach ($data as $question => $answer) {
        $currentAnswer = prompt("Question: $question\nYour answer");
        if ($currentAnswer == $answer) {
            line('Correct!');
        } else {
            line(
                "$currentAnswer is wrong answer;(. Correct answer was $answer .
        Let's try again, $name!"
            );
            return false;
        }
    }

    line("Congratulations, $name!");
}
