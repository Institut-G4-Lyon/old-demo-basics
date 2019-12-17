<?php

function main() {
    return "Bonjour tout le monde";
}

$regex = "/{{\s?(\w+)\s?}}/";

$pagecontents = file_get_contents("./index.html");

$vars = [
    "title" => "Bienvenue sur mon site",
    "content" => "Lorem ipsum dolor site amet"
];

echo preg_replace_callback($regex, function ($match) use ($vars) {
    return strtr($match[1], $vars);
}, $pagecontents);
