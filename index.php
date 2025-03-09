<?php

// Bootstrap file

// Load configuration
require_once 'config.php';

// Load dependencies
require_once 'models/Product.php';
require_once 'controllers/productController.php';

// Database connection
try {
    $pdo = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Instantiate Product model and controller
$productModel = new Product($pdo);
$productController = new ProductController($productModel);

// Routing
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $productController->index();
        break;
    case 'show':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $productController->show($id);
        break;
    case 'create':
        $productController->create();
        break;
    case 'store':
        $productController->store($_POST['name'], $_POST['color'], $_POST['img_url'], $_POST['release_at'], $_POST['brand'], $_POST['price'], $_POST['per_sale']);
        break;
    case 'edit':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $productController->edit($id);
        break;
    case 'update':
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $productController->update($id, $_POST['name'], $_POST['color'], $_POST['img_url'], $_POST['release_at'], $_POST['brand'], $_POST['price'], $_POST['per_sale']);
        break;
    case 'delete':
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $productController->delete($id);
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        echo 'Page not found';
        break;
}