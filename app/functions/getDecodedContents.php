<?php
    function getDecodedContents($path) {
        $contents = file_get_contents($path);
        return json_decode($contents);
    }