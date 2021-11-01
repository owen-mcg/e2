<?php
include 'Dice.php';

session_start();

$results = $_SESSION['answer'];

// Define players
$computer;
$player;

// Create dice
$die1 = new Dice;
$die2 = new Dice;
$points = 0;
$count = 0;

function roll($die1, $die2, $points, $count)
{
    shuffle($die1->sides);
    $roll1 = array_pop($die1->sides);
    var_dump($roll1);
    shuffle($die2->sides);
    $roll2 = array_pop($die2->sides);
    var_dump($roll2);
    if ($roll1 == $roll2) {
        var_dump($roll1);
        var_dump($roll2);
        if ($roll1 && $roll2 == 3) {
            $points *= 0;
        } elseif ($roll1 && $roll2 == 6) {
            $points += 25;
        } else {
            $points += 5;
        }
    } else {
        $points += 0;
    }
    $count++;
    return [$count => $points];
}

$playerPoints = [];
$computerPoints = [];

// while (isset($_SESSION)) {
//     if ($playerPoints[$count] < 50 && $computerPoints[$count] < 50) {
//         $roundIndex = $count;
//     }
// }

if ($results == 'roll') {
    // if ($playerPoints[$count] < 50 && $computerPoints[$count] < 50) {
    $playerPoints = [roll($die1, $die2, $points, $count)];
    var_dump($playerPoints[$count]);
    $computerPoints[$count] = roll($die1, $die2, $points, $count);
} else {
    $_SESSION = null;
}
$count++;
$roundIndex[] = $count;
// }
var_dump($roundIndex);

// if ($playerPoints[$count] >= 50 || $computerPoints[$count] >= 50) {
//     $_SESSION['answer'] = null;
// }

require 'index-view.php';
