<?php

session_start();

if (!is_null($_SESSION['results'])) {
    $results = $_SESSION;

    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];

    $_SESSION['results'] = null;
}

require 'index-view.php';