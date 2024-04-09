<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const MAX_VALUE = 10;
const MIN_VALUE = 1;
const NUMBER_OF_ROUNDS = 3;
function runGame(array $gameData, string $rule): void
{
    line('Welcome to the Brain Games!');
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");
         line($rule);
    foreach ($gameData as [$question, $correctAnswer]) {
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        } line('Correct!');
    }
            line("Congratulations, {$userName}!");
}
