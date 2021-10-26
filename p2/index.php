<?php
include 'Dice.php';

session_start();

$results = $_SESSION['answer'];
var_dump($results);

// Define players
$computer;
$player;

// Create dice
$die1 = new Dice;
$die2 = new Dice;
$rolled = [];

function roll($die1, $die2, $rolled)
{
    shuffle($die1->sides);
    $roll1 = array_pop($die1->sides);
    shuffle($die2->sides);
    $roll2 = array_pop($die2->sides);
    $rolled = [$roll1, $roll2];
    return $rolled;
}

$score = 0;
$points = 0;
$count = 0;
while ($points < 50) {
    $rolled = roll($die1, $die2, $rolled);
    if ($count % 2 == 0); {
        if ($rolled[0] == $rolled[1]) {
            if (array_sum($rolled) == 6) {
                $score = $points * 0;
            }
            elseif (array_sum($rolled) == 12) {
                $score = 25;
                $points = $points + $score;
            } else {
                $score = 5;
                $points = $points + $score;
            }
        }
    }
    $count++;
    var_dump($points);
    $totalScore[] = $points;
}

var_dump($_SESSION['answer']);
$_SESSION['answer'] = null;

require 'index-view.php';
