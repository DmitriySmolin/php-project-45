<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function engine(array $data, string $task): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($task);
    foreach ($data as $question => $answer) {
        line("Question: $question");
        $currentAnswer = prompt("Your answer");
        if ($currentAnswer != $answer) {
            line("$currentAnswer is wrong answer;(. Correct answer was $answer. Let's try again, $name!");
            return;
        }
        line('Correct!');
    }

    line("Congratulations, $name!");
}
