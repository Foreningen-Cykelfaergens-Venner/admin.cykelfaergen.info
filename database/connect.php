<?php
    $_ENV = parse_ini_file('.env', true);
    $dbName = $_ENV["DB_NAME"];

    echo $dbName;