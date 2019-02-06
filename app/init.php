<?php

session_start();

require_once 'vendor/autoload.php';
require_once 'app/classes/DB.php';
require_once 'app/classes/TwitterAuth.php';

$db= new DB;

\Codebird\Codebird::setConsumerKey('Your Consumer Key','Your Secret Key');
$client=\Codebird\Codebird::getInstance();

