<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function run($name)
{
    line('Answer "yes" if the number is even, otherwise answer "no".');
    $count = 0;
    while (true) {
        if ($count === 3) {
            line("Congratulations, $name!");
            break;
        }
        $num = rand(1, 100);
        line("Question: $num");
        $result = prompt('Your answer');
        if ($result === 'yes') {
            line('Correct!');
            $count += 1;
        } else {
            line("'yes' is wrong answer;(. Correct answer was 'no' .
        Let's try again, $name!");
            break;
        }
    }
}
