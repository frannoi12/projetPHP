<?php

require 'config.php';

require 'src/Controllers/TaskController.php';
require_once 'vendor/autoload.php';

use Toyi\ProjetPhp\Controllers\TaskController;

// Récupérer les paramètres depuis l'URL
$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller = new TaskController($pdo);

// Appeler la méthode du contrôleur en fonction de la page demandée
if ($page === 'create') {
    $controller->create();
} elseif ($page === 'store') {
    $controller->store();
} elseif ($page === 'show') {
    $controller->show($id);
} elseif ($page === 'edit') {
    $controller->edit($id);
} elseif ($page === 'update') {
    $controller->update($id);
} elseif ($page === 'delete') {
    $controller->delete($id);
} else {
    $controller->index();
}
