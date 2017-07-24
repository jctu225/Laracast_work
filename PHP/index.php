<?php

require 'functions.php';
require 'task.php';
$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);

require 'notindex.view.php';
