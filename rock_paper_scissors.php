<?php

$choice = ["Rock", "Paper", "Scissors"];

$computersChoice = $choice[rand(0,2)];

$input = (int) readline("Enter a choice - 0 : rock, 1 : Paper, 2 : Scissors: ");
if ($input < 0 || $input > 2) {
    echo "The choice must be between 0 and 2";
    exit;
} else {
    $playersChoice = $choice[$input];
}
echo "You chose $playersChoice and the Computer chose $computersChoice" . PHP_EOL;

if ($playersChoice === $computersChoice) {
    echo "It's a tie";
    exit;
} elseif ($playersChoice === $choice[0] && $computersChoice === $choice[1]) {
    echo "The computer wins with Paper against rock." . PHP_EOL;
    exit;
} elseif ($playersChoice === $choice[1] && $computersChoice === $choice[2]) {
    echo "The computer wins with Scissors against paper." . PHP_EOL;
    exit;
} elseif ($playersChoice === $choice[2] && $computersChoice === $choice[0]) {
    echo "The computer wins with rock against scissors" . PHP_EOL;
    exit;
} elseif ($playersChoice === $choice[0] && $computersChoice === $choice[2]) {
    echo "You win with Rock against Scissors." . PHP_EOL;
    exit;
} elseif ($playersChoice === $choice[1] && $computersChoice === $choice[0]) {
    echo "You win with paper against rock." . PHP_EOL;
    exit;
} elseif ($playersChoice === $choice[2] && $computersChoice === $choice[1]) {
    echo "You win with scissors against paper." . PHP_EOL;
    exit;
}