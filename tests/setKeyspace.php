<?php

require_once __DIR__ . '/../vendor/autoload.php';

use PasswordGen\PasswordGen;
$passwordGen = new PasswordGen();

echo $passwordGen->setKeyspace(PasswordGen::LOWERCASELETTERS)->password();
