<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

const MIN_PROGRESSION_LENGTH = 5;
function runProgressionGame(): void
{
    $rule = "What number is missing in the progression?";
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $start = rand(MIN_VALUE, MAX_VALUE);
        $diff = rand(MIN_VALUE, MIN_PROGRESSION_LENGTH);
        $length = rand(MIN_PROGRESSION_LENGTH, MAX_VALUE);

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

        $gameData[] = [$question, $correctAnswer];
    }
        runGame($gameData, $rule);
}
