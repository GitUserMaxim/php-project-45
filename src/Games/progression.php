<?php

namespace BrainGames\Progression;

require_once __DIR__ . '/../../vendor/autoload.php';

use function BrainGames\Engine\runGame;

function generateNumberProgression()
{
    $start = rand(1, 10);
    $diff = rand(1, 5);
    $length = rand(5, 10);

    $progression = [];
    $hiddenIndex = rand(0, $length - 1);

    for ($i = 0; $i < $length; $i++) {
        if ($i === $hiddenIndex) {
            $progression[] = '..';
        } else {
            $progression[] = $start + $i * $diff;
        }
    }
    $number = implode(' ', $progression);
    $correctAnswer = $start + $hiddenIndex * $diff;

    return ['question' => $number, 'correctAnswer' => $correctAnswer];
}

function rulesProgression()
{
    $rule = "What number is missing in the progression?";
    return $rule;
}


function progressionGame()
{
    $game = 4;
    $rule = rulesProgression();
    runGame($rule, $game);
}
