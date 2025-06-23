<?php
$blockedAgents = [
    "curl",
    "wget",
    "python",
    "scrapy",
    "java",
    "httpclient",
    "perl"
];

$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

foreach ($blockedAgents as $bot) {
    if (strpos($userAgent, $bot) !== false) {
        header("HTTP/1.1 403 Forbidden");
        exit("Acceso denegado.");
    }
}