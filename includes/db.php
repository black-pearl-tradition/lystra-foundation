<?php

$dsn = getenv('LYSTRA_DB_DSN');

if ($dsn === false || $dsn === '') {
    throw new RuntimeException('LYSTRA_DB_DSN is not configured.');
}

$username = getenv('LYSTRA_DB_USER');
$password = getenv('LYSTRA_DB_PASSWORD');

$pdo = new PDO(
    $dsn,
    $username === false ? '' : $username,
    $password === false ? '' : $password,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]
);
