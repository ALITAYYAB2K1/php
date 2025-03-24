<?php

try {
    $pdo = new PDO("sqlite:contacts.db");
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo -> exec("
        CREATE TABLE IF NOT EXISTS contacts (
            id INTEGER PRIMARY KEY,
            name TEXT,
            email TEXT,
            password TEXT,
            image TEXT
        )
    " );
    return $pdo;
} catch (PDOException $e) {
    return $e->getMessage();
}