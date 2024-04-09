<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

function isPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }
    if ($number === 2) {
        return true;
    }
    if ($number % 2 === 0) {
        return false;
    }
        $maxDivisor = sqrt($number);
    for ($i = 3; $i <= $maxDivisor; $i += 2) {
        if ($number % $i === 0) {
            return false;
        }
    }
        return true;
}
function runPrimeGame(): void
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $rndNum = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$rndNum}";
        $correctAnswer = isPrime($rndNum) ? 'yes' : 'no';

        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, $rule);
}
