<?php

session_start();

include 'Dice.php';

# Get results from previous round as stored in the session
$results = $_SESSION['results'] ?? null;
$roundCount = $results['roundIndex']['roundCount'] ?? 0;
$roundIndex = $results['roundIndex'] ?? [];


# Extract player and computer past rolls from these results
# If they exist ... otherwise start them off as an empty array
$playerRolls = $results['playerRolls'] ?? [];
$computerRolls = $results['computerRolls'] ?? [];

# Same for points
$playerPoints = $results['playerPoints'] ?? [];
$computerPoints = $results['computerPoints'] ?? [];


# Play a round
$roundIndex[] = $roundCount++;
$playerRoll = roll(); # roll returns an array of rolled dice
$playerPointsThisRound = pointsCount($playerRoll, 0); # calculates points per roll
$computerRoll = roll(); # roll returns an array of rolled dice
$computerPointsThisRound = pointsCount($computerRoll, 0);


# Add the results of this round to our existing results
$playerRolls[] = $playerRoll;
$computerRolls[] = $computerRoll;

$playerPoints[] = $playerPointsThisRound;
$computerPoints[] = $computerPointsThisRound;


# Choose a winner
if ($playerPoints < 50 && $computerPoints < 50) {
    $winner = null;
} elseif ($playerPoints >= 50) {
    $winner = 'player';
} elseif($computerPoints >= 50) {
    $winner = 'computer';
}


# Store all results in the session
$results = [
    'roundIndex' => $roundIndex,
    'playerRolls' => $playerRolls, # array of each roll
    'playerPointsThisRound' => $playerPointsThisRound, # points for single roll (should be an int)
    'playerPoints' => $playerPoints, # sum of all points (should be an int)
    'computerRolls' => $computerRolls, # array of each roll
    'computerPointsThisRound' => $computerPointsThisRound, # points for single roll (should be an int)
    'computerPoints' => $computerPoints, # sum of all points (should be an int)
    'winner' => $winner,
];

$_SESSION['results'] = $results;

header('Location: index.php');

################

function roll()
{
    $die1 = new Dice;
    $die2 = new Dice;

    shuffle($die1->sides);
    $roll1 = $die1->sides[0];
    shuffle($die2->sides);
    $roll2 = $die2->sides[0];
    $rolled = [$roll1, $roll2];
    return $rolled;
}

################

function pointsCount($rolled, $points)
{
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