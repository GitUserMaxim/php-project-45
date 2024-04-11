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
    $gameData = generateGameData();
    runGame($gameData, $rule);
}

function generateGameData(): array
{
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $progression = generateProgression();
        $hiddenIndex = rand(0, count($progression) - 1);
        $correctAnswer = (string)$progression[$hiddenIndex];
        $progression[$hiddenIndex] = '..';
        $question = implode(' ', $progression);
        $gameData[] = [$question, $correctAnswer];
    }
    return $gameData;
}

function generateProgression(): array
{
    $start = rand(MIN_VALUE, MAX_VALUE);
    $diff = rand(MIN_VALUE, MIN_PROGRESSION_LENGTH);
    $length = rand(MIN_PROGRESSION_LENGTH, MAX_VALUE);

    $progression = [];
    for ($j = 0; $j < $length; $j++) {
        $progression[] = $start + $j * $diff;
    }
    return $progression;
}
