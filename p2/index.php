<?php

session_start();

// if statement to check for results in session
if (isset($_SESSION['results'])) {
    $results = $_SESSION['results'];
    $roundIndex = $results['roundIndex'];
    $roundCount = $results['roundCount'];
    $playerRolls = $results['playerRolls'];
    $computerRolls = $results['computerRolls'];
    $playerPoints = $results['playerPoints'];
    $computerPoints = $results['computerPoints'];
    $winner = $results['winner'];
}

require 'index-view.php';
