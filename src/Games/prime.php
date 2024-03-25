<?php

namespace BrainGames\Prime;

require_once __DIR__ . '/../../vendor/autoload.php';

use function BrainGames\Engine\runGame;

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
    for ($i = 3; $i < $maxDivisor; $i += 2) {
        if ($number % $i == 0) {
            return false;
        }
    }
        return true;
}
function rulesPrime(): string
{
    $rule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    return $rule;
}


function primeGame(): void
{
    $game = 5;
    $rule = rulesPrime();
    runGame($rule, $game);
}
