<?php

namespace BrainGames\Even;

require_once __DIR__ . '/../../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\runGame;

function generateNumberEven(): int
{
    $number = rand(1, 100);
    return $number;
}
function correctAnswerEven($number)
{
    $answer = ($number % 2 === 0) ? 'yes' : 'no';
    return $answer;
}
function rulesEven()
{
    $rule = "Answer 'yes' if the number is even, otherwise answer 'no'.";
    return $rule;
}


function evenGame()
{
    $game = 1;
    $rule = rulesEven();
    runGame($rule, $game);
}
