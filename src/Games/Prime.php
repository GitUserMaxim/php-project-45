<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }
        $maxDivisor = sqrt($number);
    for ($i = 2; $i <= $maxDivisor; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
        return true;
}

function runPrimeGame(): void
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $gameData = generateGameData();
    runGame($gameData, $rule);
}
function generateGameData(): array
{
    $gameData = [];

    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $rndNum = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$rndNum}";
        $correctAnswer = isPrime($rndNum) ? 'yes' : 'no';
        $gameData[] = [$question, $correctAnswer];
    }

    return $gameData;
}
