<?php

namespace BrainGames\Even;

require_once __DIR__ . '/../../vendor/autoload.php';

use function BrainGames\Engine\runGame;

function generateNumberEven(): int
{
    $number = rand(1, 100);
    return $number;
}
function correctAnswerEven(int $number): string
{
    $answer = ($number % 2 === 0) ? 'yes' : 'no';
    return $answer;
}
function rulesEven(): string
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    return $rule;
}


function evenGame(): void
{
    $game = 1;
    $rule = rulesEven();
    runGame($rule, $game);
}
