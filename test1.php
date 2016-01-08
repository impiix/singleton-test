
<?php
$loader = require_once __DIR__ . "/vendor/autoload.php";


use Project\task;
use Project\extendedTask;



$task = task::create();
$task->doIt("./data.json", "./result.json");

$task = extendedTask::create();

$task->doIt("./data.json", "./result2.json");