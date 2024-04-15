<?php

namespace BrainGames\Gcd;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

function getGcd(int $num1, int $num2): int
{
    while ($num2 !== 0) {
        $temp = $num1 % $num2;
        $num1 = $num2;
        $num2 = $temp;
    }

    return $num1;
}
function runGcdGame(): void
{
    $rule = "Find the greatest common divisor of given numbers.";
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $number1 = rand(MIN_VALUE, MAX_VALUE);
        $number2 = rand(MIN_VALUE, MAX_VALUE);
        $question = "$number1 $number2";
        $correctAnswer = (string)getGcd($number1, $number2);
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, $rule);
}
