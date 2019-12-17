<?php

function main() {
    return "Bonjour tout le monde";
}

$pagecontents = file_get_contents("./index.html");

echo str_replace("\$myVar", "Pineapple", $pagecontents);
