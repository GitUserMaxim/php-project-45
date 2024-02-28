<?php

namespace BrainGames\even;

use function cli\line;
use function cli\prompt;

function even()
{
line('Welcome to the Brain Games!');
$name = prompt('May I have your name?');
line("Hello, {$name}!");
line("Answer 'yes' if the number is even, otherwise answer 'no'.");

$correctAnswersCount = 0;
while ($correctAnswersCount < 3) {
    $number = rand(1, 100);
    line("Question: {$number}");
    $userAnswer = prompt('Your answer:');

    $isEven = $number % 2 === 0;
    $correctAnswer = $isEven ? 'yes' : 'no';

    if ($userAnswer !== $correctAnswer) {
        line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
        line("Let's try again, {$name}!");
        return;
    }

    line('Correct!');
    $correctAnswersCount++;
}

line("Congratulations, {$name}!");
}
