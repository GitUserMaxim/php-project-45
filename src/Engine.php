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

function runGame($rule, $game)
{
    $name = welcome();
    line($rule);
    $correctAnswerCount = 0;
    while ($correctAnswerCount < 3) {
        switch ($game) {
            case '1':
                $number = generateNumberEven();
                $correctAnswer = correctAnswerEven($number);
                break;
            case '2':
                $number = generateNumberCalc();
                list($num1, $sign, $num2) = sscanf($number, "%d %s %d");
                $correctAnswer = correctAnswerCalc($num1, $sign, $num2);
                break;
            case '3':
                $number = generateNumberGcd();
                list($num1, $num2) = sscanf($number, "%d %d");
                $correctAnswer = correctAnswerGcd($num1, $num2);
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

function welcome()
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, {$name}!");
    return $name;
}

function askQuestion($number)
{
    line("Question: {$number}");
}