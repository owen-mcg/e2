<?php

session_start();

$results = $_SESSION;

$haveAnswer = $results['haveAnswer'];
$correct = $results['correct'];

require 'done-view.php';