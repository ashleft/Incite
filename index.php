<?php
$request_uri = $_SERVER['REQUEST_URI'];
$request_uri = rtrim($request_uri, '/');
$request_uri = ltrim($request_uri, '/');
$file_path = $request_uri . '.html';

if (file_exists($file_path)) {
    include($file_path);
} else {
    // Handle 404 Not Found error
    header('HTTP/1.0 404 Not Found');
    echo '404 Not Found';
}
