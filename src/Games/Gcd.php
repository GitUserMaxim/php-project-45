<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

function correctAnswerGcd(int $num1, int $num2): string
{
    while ($num2 != 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return (string) $num1;
}
function gcdGame(): void
{
    $rule = "Find the greatest common divisor of given numbers.";
    $data = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $question = "{$num1} {$num2}";
        $correctAnswer = correctAnswerGcd($num1, $num2);
        $data[] = [$question, $correctAnswer];
    }
    runGame($data, $rule);
}
