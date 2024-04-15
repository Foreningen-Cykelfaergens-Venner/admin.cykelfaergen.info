<?php
    $_ENV = parse_ini_file('.env', true);
    $dbName = $_ENV["DB_NAME"];
    $dbUser = $_ENV["DB_USER"];
    $dbPassword = $_ENV["DB_PASS"];
    $dbHost = $_ENV["DB_HOST"];