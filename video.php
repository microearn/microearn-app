<?php

if (!isset($_GET['url'])) {
    http_response_code(400);
    echo "Missing video URL";
    exit;
}

// Decodifica la URL
$videoUrl = urldecode($_GET['url']);

// Validación básica (opcional pero recomendable)
if (!filter_var($videoUrl, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    echo "Invalid URL";
    exit;
}

// Redirige al video real
header("Location: " . $videoUrl);
exit;