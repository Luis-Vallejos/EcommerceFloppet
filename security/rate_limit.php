<?php
session_start();

$ip = $_SERVER['REMOTE_ADDR'];
$limiteTiempo = 60;
$maxPeticiones = 10;

if (!isset($_SESSION['scraping_protect'])) {
    $_SESSION['scraping_protect'] = [];
}

$_SESSION['scraping_protect'] = array_filter($_SESSION['scraping_protect'], function ($timestamp) use ($limiteTiempo) {
    return $timestamp > time() - $limiteTiempo;
});

if (count($_SESSION['scraping_protect']) >= $maxPeticiones) {
    header("HTTP/1.1 429 Too Many Requests");
    exit("Demasiadas solicitudes. Intenta más tarde.");
}

$_SESSION['scraping_protect'][] = time();