<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function engine($data, $task)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    line($task);
    foreach ($data as $key => $value) {
        $answer = prompt("Question: $key\nYour answer");
        if ($answer == $value) {
            line('Correct!');
        } else {
            line("$answer is wrong answer;(. Correct answer was $value .
        Let's try again, $name!");
            return false;
        }
    }

    line("Congratulations, $name!");
}