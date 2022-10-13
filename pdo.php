<?php
$pdo = new PDO("mysql:host=localhost:3306;dbname=carte;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);