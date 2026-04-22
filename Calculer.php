<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculer</title>
</head>
<body>
        <h2>Calculatrice PHP</h2>
        <form action="Resultats.php" method="POST">
                <label for="num1">Premier nombre :</label>
                <input type="number" step="any" name="num1" id="num1" required>
            
                <label for="operation">Opération :</label>
                <select name="operation" id="operation" required>
                    <option value="add">Addition (+)</option>
                    <option value="subtract">Soustraction (-)</option>
                    <option value="multiply">Multiplication (×)</option>
                    <option value="divide">Division (÷)</option>
                </select>
           
            
                <label for="num2">Deuxième nombre :</label>
                <input type="number" step="any" name="num2" id="num2" required>
            
            <button type="submit">Calculer</button>
        </form>
</body>
</html>