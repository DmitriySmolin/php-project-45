<?php

namespace BrainGames\Engine;

use function BrainGames\Cli\welcome;
use function cli\line;
use function cli\prompt;

function engine($assocArray, $task)
{
    $name = welcome();
    line($task);
    foreach ($assocArray as $key => $value) {
        $answer = prompt("Question: $key\n Your answer");
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