<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link href="/css/styles.css" rel="stylesheet">
    <title>Créer une Tâche</title>
</head>
<body>
    <h1>Créer une Tâche</h1>
    <form action="?page=store" method="post">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit">Ajouter</button>
    </form>
    <a href="?page=index">Retour à la liste des Tâches</a>
</body>
</html>
