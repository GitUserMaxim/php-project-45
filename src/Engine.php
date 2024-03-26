<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;
use function BrainGames\Even\generateNumberEven;
use function BrainGames\Even\correctAnswerEven;
use function BrainGames\Calc\generateNumberCalc;
use function BrainGames\Calc\correctAnswerCalc;
use function BrainGames\Gcd\generateNumberGcd;
use function BrainGames\Gcd\correctAnswerGcd;
use function BrainGames\Progression\generateNumberProgression;
use function BrainGames\Prime\generateNumberPrime;
use function BrainGames\Prime\correctAnswerPrime;

function runGame(string $rule, int $game): void
{
    $name = welcome();
    line($rule);
    $number = '';
    $correctAnswer = '';
    $correctAnswerCount = 0;
    while ($correctAnswerCount < 3) {
        switch ($game) {
            case 1:
                $number = generateNumberEven();
                $correctAnswer = correctAnswerEven($number);
                break;
            case 2:
                $data = generateNumberCalc();
                $sign = $data[1];
                $num1 = $data[0];
                $num2 = $data[2];
                $number = "{$num1} {$sign} {$num2}";
                $correctAnswer = correctAnswerCalc($num1, $sign, $num2);
                break;
            case 3:
                $data = generateNumberGcd();
                $number = $data[0];
                $num1 = $data[1];
                $num2 = $data[2];
                $correctAnswer = correctAnswerGcd($num1, $num2);
                break;
            case 4:
                $data = generateNumberProgression();
                $number = $data['question'];
                $correctAnswer = $data['correctAnswer'];
                break;
            case 5:
                $number = generateNumberPrime();
                $correctAnswer = correctAnswerPrime($number) ? 'yes' : 'no';
                break;
        }
        askQuestion($number);
        $userAnswer = prompt('Your answer');
        if ($userAnswer ==  $correctAnswer) {
            line('Correct!');
            $correctAnswerCount++;
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            break;
        }
        if ($correctAnswerCount === 3) {
            line("Congratulations, {$name}!");
        }
    }
}

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    return $name;
}

function askQuestion(int|string $number): void
{
    line("Question: {$number}");
}
