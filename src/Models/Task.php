<?php
namespace Toyi\ProjetPhp\Models;

class Task {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllTasks() {
        $stmt = $this->pdo->query('SELECT * FROM tache');
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function addTask($title, $description) {
        $stmt = $this->pdo->prepare('INSERT INTO tache (titre, description, status, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())');
        return $stmt->execute([$title, $description, 'pending']);
    }

    public function getTaskById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM tache WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function updateTask($id, $title, $description) {
        $stmt = $this->pdo->prepare('UPDATE tache SET titre = ?, description = ?, updated_at = NOW() WHERE id = ?');
        return $stmt->execute([$title, $description, $id]);
    }

    public function deleteTask($id) {
        $stmt = $this->pdo->prepare('DELETE FROM tache WHERE id = ?');
        return $stmt->execute([$id]);
    }
}
?>
