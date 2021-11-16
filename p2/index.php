<?php

session_start();

// if statement to check for results in session
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $roundIndex = $results['roundIndex'];
    $playerRolls = $results['playerRolls'];
    $computerRolls = $results['computerRolls'];
    $playerPointsThisRound = $results['playerPointsThisRound'];
    $computerPointsThisRound = $results['computerPointsThisRound'];
    $playerPoints = $results['playerPoints'];
    $computerPoints = $results['computerPoints'];
    $winner = $results['winner'];
}

var_dump("results =", $results);

require 'index-view.php';
session_destroy();
