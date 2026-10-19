<?php

header('Content-Type: application/json; charset=utf-8');

$name = isset($_GET['name']) && is_string($_GET['name']) && $_GET['name'] !== ''
    ? $_GET['name']
    : 'Vercel';

http_response_code(200);
echo json_encode([
    'ok' => true,
    'message' => "Hello, {$name}!",
    'runtime' => 'PHP',
    'php_version' => PHP_VERSION,
    'method' => $_SERVER['REQUEST_METHOD'] ?? 'GET',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
