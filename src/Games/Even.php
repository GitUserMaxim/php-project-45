<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;
use const BrainGames\Engine\MIN_VALUE;
use const BrainGames\Engine\MAX_VALUE;

function isEven(int $num): bool
{
    return $num % 2 === 0;
}
function runEvenGame(): void
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $gameData = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $rndNum = rand(MIN_VALUE, MAX_VALUE);
        $question = "{$rndNum}";
        $correctAnswer = isEven($rndNum) ? 'yes' : 'no';
        $gameData[] = [$question, $correctAnswer];
    }
    runGame($gameData, $rule);
}
