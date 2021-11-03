<?php
include 'Dice.php';

session_start();
$results = $_SESSION['answer'];

// Define players
$computer;
$player;

<<<<<<< HEAD
// Create dice from class
$die1 = new Dice;
$die2 = new Dice;
$roll1 = 0;
$roll2 = 0;
$rolled = [];
$points = 0;
$roundCount = 0;
$playerPoints = 0;
$computerPoints = 0;

function roll($die1, $die2, $roll1, $roll2, $rolled)
{
    shuffle($die1->sides);
    $roll1 = $die1->sides[0];
    shuffle($die2->sides);
    $roll2 = $die2->sides[0];
    $rolled = [$roll1, $roll2];
    return $rolled;
}

function pointsCount($rolled, $points) {
    if (key_exists(0, $rolled) && key_exists(1, $rolled)) {
        if ($rolled[0] == $rolled[1]) {
            if ($rolled[0] && $rolled[1] == 3) {
                $points = $points * 0;
            } elseif ($rolled[0] && $rolled[1] == 6) {
                $points += 25;
            } else {
                $points += 5;
            }
        } else {
            $points += 0;
        }
    }
    return $points;
}

if ($playerPoints >= 50 || $computerPoints >= 50) {
    $_SESSION['answer'] = null;
} elseif ($playerPoints < 50 || $computerPoints < 50) {
    if ($results == 'roll') {
        $playerRoll = roll($die1, $die2, $roll1, $roll2, $rolled);
        $playerPoints = pointsCount($rolled, $points);
        $computerRoll = roll($die1, $die2, $roll1, $roll2, $rolled);
        $computerPoints = pointsCount($rolled, $points);
    }
    $roundCount++;
    $roundIndex[] = $roundCount;
=======
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

// if (isset($_SESSION)) {
//     if ($playerPoints[$count] < 50 || $computerPoints[$count] < 50) {
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

if ($playerPoints[$count] >= 50 || $computerPoints[$count] >= 50) {
    $_SESSION['answer'] = null;
>>>>>>> 463da4a16e4550667ac0b1c2121eb248b508e8f2
}

require 'index-view.php';
