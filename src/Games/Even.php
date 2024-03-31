<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

use const BrainGames\Engine\NUMBER_OF_ROUNDS;

function evenGame(): void
{
    $rule = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        $question = rand(1, 100);
        $correctAnswer = ($question % 2 === 0) ? 'yes' : 'no';
        $data[] = [$question, $correctAnswer];
    }
    runGame($data, $rule);
}
