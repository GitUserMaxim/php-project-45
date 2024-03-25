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
    $number = $num1 . " " . $sign . " " . $num2;
    return $number;
}
function correctAnswerCalc($num1, $sign, $num2)
{
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
function rulesCalc()
{
    $rule = "What is the result of the expression?";
    return $rule;
}


function calcGame()
{
    $game = 2;
    $rule = rulesCalc();
    runGame($rule, $game);
}
