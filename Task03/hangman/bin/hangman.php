<?php

require_once(__DIR__ . "/../vendor/autoload.php");

use function rusjkh\hangman\Controller\key;

if (isset($argv[1])) {
    $key = $argv[1];
    key($key);
} else {
    $key = "-n";
    key($key);
}
