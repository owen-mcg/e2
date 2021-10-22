<?php

session_start();

$answer = $_POST['answer'];

$haveAnswer = true;

if ($answer == 'O') {
    $haveAnswer = false;
} elseif ($answer == 'pumpkin') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = [
    'haveAnswer' => $haveAnswer,
    'correct' => $correct,
];

header('Location: index.php');