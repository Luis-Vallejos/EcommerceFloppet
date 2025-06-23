<?php
$controllerName = $_GET['controller'] ?? null;
$action = $_GET['action'] ?? null;
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

if (!$controllerName) {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'No se ha especificado un controlador.']);
    exit;
}

switch (strtolower($controllerName)) {
    case 'auth':
        require_once 'controllers/AuthController.php';
        // $controller = new \Controllers\AuthController();
        break;
    default:
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Controlador no válido.']);
        exit;
}

$controller->handleRequest($action, $_SERVER['REQUEST_METHOD'], $id);
