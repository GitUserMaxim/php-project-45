<?php

namespace BrainGames\Gcd;

require_once __DIR__ . '/../../vendor/autoload.php';

use function cli\line;
use function cli\prompt;

use function BrainGames\Engine\runGame;

function generateNumberGcd()
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $number = "{$num1} {$num2}";
    return $number;
}
function correctAnswerGcd($num1, $num2)
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return $num1;
}
function rulesGcd()
{
    $rule = "Find the greatest common divisor of given numbers.";
    return $rule;
}


function gcdGame()
{
    $game = 3;
    $rule = rulesGcd();
    runGame($rule, $game);
}
