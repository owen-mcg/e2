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

$points = 0;
$playerPoints = [];
$computerPoints = [];
$roundIndex = [];
$count = 0;

if ($results == 'roll') {
    $rolled = roll($die1, $die2, $rolled);
    var_dump($rolled);
    if ($rolled[0] == $rolled[1]) {
        if ($rolled[0] && $rolled[1] == 3) {
            $points *= 0;
        } elseif ($rolled[0] && $rolled[1] == 6) {
            $points += 25;
        } else {
            $points += 5;
        }
    } else {
        $points += 0;
    }
    $count++;
    $roundIndex[] = $count;
}


var_dump($_SESSION['answer']);
$_SESSION['answer'] = null;

require 'index-view.php';
