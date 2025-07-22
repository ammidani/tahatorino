<?php
// Set headers for CORS and content type
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Basic routing
$requestUri = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$controller = isset($requestUri[1]) ? $requestUri[1] : 'default';
$action = isset($requestUri[2]) ? $requestUri[2] : 'index';

// Simple response for testing
echo json_encode([
    'message' => 'Welcome to Hambazaar API!',
    'controller' => $controller,
    'action' => $action
]);
