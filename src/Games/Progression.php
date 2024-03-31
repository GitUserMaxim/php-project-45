<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

function progressionGame(): void
{
    $rule = "What number is missing in the progression?";
    $data = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $start = rand(1, 10);
        $diff = rand(1, 5);
        $length = rand(5, 10);

        $progression = [];
        $hiddenIndex = rand(0, $length - 1);

        for ($j = 0; $j < $length; $j++) {
            if ($j === $hiddenIndex) {
                $progression[] = '..';
            } else {
                $progression[] = $start + $j * $diff;
            }
        }
        $question = implode(' ', $progression);
        $correctAnswer = (string)($start + $hiddenIndex * $diff);

        $data[] = [$question, $correctAnswer];
    }
        runGame($data, $rule);
}
