<?php

namespace BrainGames\Gcd;

require_once __DIR__ . '/../../vendor/autoload.php';

use function BrainGames\Engine\runGame;

function generateNumberGcd(): string
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $number = "{$num1} {$num2}";
    return $number;
}
function correctAnswerGcd(int $num1, int $num2): string
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return $num1;
}
function rulesGcd(): string
{
    $rule = "Find the greatest common divisor of given numbers.";
    return $rule;
}


function gcdGame(): void
{
    $game = 3;
    $rule = rulesGcd();
    runGame($rule, $game);
}
