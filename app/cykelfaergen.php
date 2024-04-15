<?php
    include "functions/getDecodedContents.php";
    $danish = getDecodedContents(__DIR__ . "/language/da.json");
    $german = getDecodedContents( __DIR__ . "/language/de.json");
    $english = getDecodedContents( __DIR__ .  "/language/en.json");
    $title = $german->home->title;
    $description = $german->home->description;

    include "components/Head/index.php";
    include "components/Header/index.php";
