<?php

require_once 'Logger.php';
require_once 'FileLogger.php';
require_once 'DatabaseLogger.php';


$fileLogger = new FileLogger('log.txt');
$fileLogger->log('This is a file log entry.');


$databaseConnection = new PDO('mysql:host=localhost;dbname=logs', 'username=root', 'password');
$databaseLogger = new DatabaseLogger($databaseConnection);
$databaseLogger->log('This is a database log entry.');
