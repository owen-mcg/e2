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
$roundIndex = [];
$count = 0;

function roll($die1, $die2, $points)
{
    shuffle($die1->sides);
    $roll1 = array_pop($die1->sides);
    shuffle($die2->sides);
    $roll2 = array_pop($die2->sides);
    if ($roll1 == $roll2) {
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
    return $points;
}

$playerPoints = [];
$computerPoints = [];

if ($results == 'roll') {
    if ($playerPoints[$count] < 50 && $computerPoints[$count] < 50) {
        $playerPoints[$count] = roll($die1, $die2, $points);
        $computerPoints[$count] = roll($die1, $die2, $points);
    }
    $count++;
    $roundIndex[] = $count;
}
var_dump($count);

if ($playerPoints[$count] >= 50 || $computerPoints[$count] >= 50) {
    $_SESSION['answer'] = null;
}

require 'index-view.php';
