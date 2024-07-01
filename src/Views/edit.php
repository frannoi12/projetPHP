<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="/css/styles.css" rel="stylesheet">
    <title>Modifier une Tâche</title>
</head>
<body>
    <h1>Modifier une Tâche</h1>
    <form action="?page=update&id=<?php echo $task['id']; ?>" method="post">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($task['titre']); ?>" required>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required><?php echo htmlspecialchars($task['description']); ?></textarea>
        <button type="submit">Modifier</button>
    </form>
    <a href="?page=index">Retour à la liste des Tâches</a>
</body>
</html>
