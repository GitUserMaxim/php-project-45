<?php

namespace BrainGames\Calc;

require_once __DIR__ . '/../../vendor/autoload.php';

use function BrainGames\Engine\runGame;

function generateNumberCalc(): string
{
    $num1 = rand(1, 10);
    $num2 = rand(1, 10);
    $signArr = ['+', '-', '*'];
    $num3 = rand(0, 2);
    $sign = $signArr[$num3];
    $number = "{$num1} {$sign} {$num2}";
    return $number;
}
function correctAnswerCalc(int $num1, string $sign, int $num2): string
{
    $answer = '';
    switch ($sign) {
        case '+':
            $answer = $num1 + $num2;
            break;
        case '-':
            $answer = $num1 - $num2;
            break;
        case '*':
            $answer = $num1 * $num2;
            break;
    }
      return $answer;
}
function rulesCalc(): string
{
    $rule = "What is the result of the expression?";
    return $rule;
}


function calcGame(): void
{
    $game = 2;
    $rule = rulesCalc();
    runGame($rule, $game);
}
