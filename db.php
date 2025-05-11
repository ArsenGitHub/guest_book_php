<?php

$host = 'MySQL-8.2';
$dbname = 'my_db';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

$pdo = new PDO($dsn, $user, $pass, $options);
var_dump($pdo);

