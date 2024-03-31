<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

function generateNumberPrime(): int
{
    $number = rand(1, 100);
    return $number;
}
function correctAnswerPrime(int $number): bool
{
    if ($number <= 1) {
        return false;
    }
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
        $maxDivisor = sqrt($number);
    for ($i = 3; $i <= $maxDivisor; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
        return true;
}
function primeGame(): void
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $question = rand(1, 100);
        $correctAnswer = correctAnswerPrime($question) ? 'yes' : 'no';

        $data[] = [$question, $correctAnswer];
    }
    runGame($data, $rule);
}
