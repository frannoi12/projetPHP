<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Tâches</title>
</head>
<body>
    <h1>Liste des Tâches</h1>
    <?php if (!empty($tasks)): ?>
        <ul>
            <?php foreach ($tasks as $task): ?>
                <li>
                    <strong><?php echo htmlspecialchars($task['titre']); ?></strong>
                    <p><?php echo htmlspecialchars($task['description']); ?></p>
                    <a href="?page=show&id=<?php echo $task['id']; ?>">Voir</a>
                    <a href="?page=edit&id=<?php echo $task['id']; ?>">Modifier</a>
                    <a href="?page=delete&id=<?php echo $task['id']; ?>">Supprimer</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucune tâche trouvée.</p>
    <?php endif; ?>
    <a href="?page=create">Ajouter une Tâche</a>
</body>
</html>
