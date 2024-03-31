<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

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
      return (string)$answer;
}

function calcGame(): void
{
    $rule = "What is the result of the expression?";
    $data = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num1 = rand(1, 10);
        $num2 = rand(1, 10);
        $num3 = rand(0, 2);
        $signArr = ['+', '-', '*'];
        $sign = $signArr[$num3];
        $question = "{$num1} {$sign} {$num2}";
        $correctAnswer = correctAnswerCalc($num1, $sign, $num2);

        $data[] = [$question, $correctAnswer];
    }
        runGame($data, $rule);
}
