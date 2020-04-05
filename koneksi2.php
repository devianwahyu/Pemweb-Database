<?php

$host = 'localhost';
$user = 'root';
$db = 'user';

$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
);

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, '', $options);
