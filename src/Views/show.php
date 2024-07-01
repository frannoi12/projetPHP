<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="/css/styles.css" rel="stylesheet">
    <title>Détails de la Tâche</title>
</head>
<body>
    <h1>Détails de la Tâche</h1>
    <p><strong>Titre :</strong> <?php echo htmlspecialchars($task['titre']); ?></p>
    <p><strong>Description :</strong> <?php echo htmlspecialchars($task['description']); ?></p>
    <a href="?page=edit&id=<?php echo $task['id']; ?>">Modifier</a>
    <a href="?page=index">Retour à la liste des Tâches</a>
</body>
</html>
