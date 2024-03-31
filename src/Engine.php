<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;
function runGame(mixed $data, string $rule): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
         line($rule);
    foreach ($data as [$question, $correctAnswer]) {
        line("Question: $question");
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        } line('Correct!');
    }
            line("Congratulations, {$name}!");
}
