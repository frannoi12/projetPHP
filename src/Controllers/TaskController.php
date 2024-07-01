<?php

namespace Toyi\ProjetPhp\Controllers;

require 'src/Models/Task.php';


use Toyi\ProjetPhp\Models\Task;

class TaskController {
    private $task;

    public function __construct($pdo) {
        $this->task = new Task($pdo);
    }

    public function index() {
        $tasks = $this->task->getAllTasks();
        require 'src/Views/index.php';
    }

    public function create() {
        require 'src/Views/create.php';
    }

    public function store() {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->task->addTask($title, $description);
        header('Location: ?page=index');
    }

    public function show($id) {
        $task = $this->task->getTaskById($id);
        require 'src/Views/show.php';
    }

    public function edit($id) {
        $task = $this->task->getTaskById($id);
        require 'src/Views/edit.php';
    }

    public function update($id) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $this->task->updateTask($id, $title, $description);
        header('Location: ?page=index');
    }

    public function delete($id) {
        $this->task->deleteTask($id);
        header('Location: ?page=index');
    }
}
