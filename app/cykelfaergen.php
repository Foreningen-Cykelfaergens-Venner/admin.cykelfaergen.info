<?php
    require __DIR__."/../database/connect.php";
    include "functions/getDecodedContents.php";
    /* Getting content based on the selected language */
    $language = getDecodedContents( __DIR__ .  "/language/da.json");
    if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "da"){
        $language = getDecodedContents(__DIR__ . "/language/da.json");
    } else if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "de"){
        $language =  getDecodedContents( __DIR__ . "/language/de.json");
    }else if(isset($_COOKIE["language"]) && $_COOKIE["language"] == "en"){
        $language =  getDecodedContents( __DIR__ . "/language/en.json");
    }
    
    /* Setup */
    $nav = $language->nav;

    /* Getting the correct file */
    $path = $_SERVER["REQUEST_URI"];
    if($path == "/"){
        $path = "home";
    }else{
        $path = substr($path, 1);
    }
    
    if(!file_exists(__DIR__."/pages/".$path.".php")){
        $path = "errors/404";
        $languagePath = "errors";
    }else{
        $languagePath = $path;
    }
    
    /* Getting the title and description */
    
    if($languagePath == "errors"){
        $title = $language->pages->errors->{'404'}->title;
        $description = $language->pages->errors->{'404'}->description;
    }else{
        $title = $language->pages->{$languagePath}->title;
        $description = $language->pages->{$languagePath}->description;
    }

    include "components/Head/index.php";
    include "components/Header/index.php";
    include "pages/".$path.".php";
    include "components/Footer/index.php";
