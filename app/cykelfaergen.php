<?php
    require __DIR__."/../database/connect.php";
    include "functions/getDecodedContents.php";
    
    $language = getDecodedContents( __DIR__ .  "/language/da.json");
    if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "da"){
        $language = getDecodedContents(__DIR__ . "/language/da.json");
    } else if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "de"){
        $language =  getDecodedContents( __DIR__ . "/language/de.json");
    }else if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "en"){
        $language =  getDecodedContents( __DIR__ . "/language/en.json");
    }

    $path = $_SERVER["REQUEST_URI"];
    if($path == "/"){
        $path = "home";
    }else{
        $path = substr($path, 1);
    }

    $title = $language->{$path}->title;
    $description = $language->{$path}->description;
    $nav = $language->nav;

    include "components/Head/index.php";
    include "components/Header/index.php";
    include "pages/".$path.".php";
    include "components/Footer/index.php";
