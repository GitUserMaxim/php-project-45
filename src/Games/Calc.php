<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

function calculate(int $num1, string $sign, int $num2): int
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
        default:
            break;
    }
      return (int) $answer;
}

function runCalcGame(): void
{
    $rule = "What is the result of the expression?";
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $operand1 = rand(MIN_VALUE, MAX_VALUE);
        $operand2 = rand(MIN_VALUE, MAX_VALUE);
        $operations = ['+', '-', '*'];
        $operation = $operations[array_rand($operations)];
        $question = "{$operand1} {$operation} {$operand2}";
        $correctAnswer = (string)calculate($operand1, $operation, $operand2);
        $gameData[] = [$question, $correctAnswer];
    }
        runGame($gameData, $rule);
}
