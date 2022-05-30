<?php

require_once '../model/User.php';
require_once '../model/Task.php';
require_once '../model/TaskProvider.php';

session_start();

$username = null;
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username']->getUsername();
} else {
    header("location: /");
    die();
}

$pageHeader = "Задачи";

$taskProvider = new TaskProvider();
$taskProvider->addTask(new Task('Погулять с собакой'));
$tasks = $taskProvider->getUndoneList();

include "../view/tasks.php";