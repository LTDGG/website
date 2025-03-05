<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats du Quiz</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Résultats du Quiz</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<ul>";
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                echo "<li><strong>" . htmlspecialchars($key) . " :</strong> " . implode(", ", array_map("htmlspecialchars", $value)) . "</li>";
            } else {
                echo "<li><strong>" . htmlspecialchars($key) . " :</strong> " . htmlspecialchars($value) . "</li>";
            }
        }
        echo "</ul>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>

    <a href="tp2.html">Retour au quiz</a>
</body>
</html>
