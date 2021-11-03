<?php

session_start();
var_dump($_POST['answer']);

$_SESSION['answer'] = $_POST['answer'];

var_dump($_SESSION['answer']);

header('Location: index.php');