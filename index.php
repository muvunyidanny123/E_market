<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include the existing config file from src directory
require_once __DIR__ . '/src/config.php';

// Define application path constants
define('APP_PATH', __DIR__ . '/app/');
define('CONTROLLER_PATH', APP_PATH . 'controllers/');
define('MODEL_PATH', APP_PATH . 'models/');
define('VIEW_PATH', APP_PATH . 'views/');
define('SRC_PATH', __DIR__ . '/src/');

// Include necessary core files from src directory with lowercase names
require_once SRC_PATH . 'model.php';
require_once SRC_PATH . 'view.php';
require_once SRC_PATH . 'controller.php';

// Autoload classes
spl_autoload_register(function($className) {
    // Convert namespace to file path
    $className = str_replace('\\', '/', $className);
    
    // Check for controller
    if (file_exists(CONTROLLER_PATH . $className . '.php')) {
        require_once CONTROLLER_PATH . $className . '.php';
        return;
    }
    
    // Check for model
    if (file_exists(MODEL_PATH . $className . '.php')) {
        require_once MODEL_PATH . $className . '.php';
        return;
    }
    
    // For other classes
    if (file_exists(APP_PATH . $className . '.php')) {
        require_once APP_PATH . $className . '.php';
    }
});

// Parse URL
$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');
$url = filter_var($url, FILTER_SANITIZE_URL);
$url = explode('/', $url);

// Determine controller
$controllerName = !empty($url[0]) ? $url[0] : DEFAULT_CONTROLLER;
$controllerFile = CONTROLLER_PATH . $controllerName . '.php';

// Check if controller exists
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    
    // Determine method
    $methodName = isset($url[1]) ? $url[1] : 'index';
    
    // Check if method exists
    if (method_exists($controller, $methodName)) {
        // Get parameters
        $params = array_slice($url, 2);
        
        // Call method with parameters
        call_user_func_array([$controller, $methodName], $params);
    } else {
        // Method not found, call index or show 404
        if (method_exists($controller, 'index')) {
            $controller->index();
        } else {
            // 404 handling
            echo "404 - Method not found";
        }
    }
} else {
    // Controller not found
    echo "404 - Controller not found";
}
