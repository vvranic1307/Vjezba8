<?php
// Početni niz vozila
$cars = array("Audi", "BMW", "Renault", "Citroen");
$novoVozilo = "";

// Obrada forme
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Dodavanje novog vozila
    if (!empty($_POST['novoVozilo'])) {
        $novoVozilo = htmlspecialchars($_POST['novoVozilo']);
        $cars[] = $novoVozilo; // Dodaj vozilo u niz
    }
}
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rad s nizovima i foreach petljom u PHP-u.">
    <meta name="keywords" content="php, foreach, nizovi, forme">
    <title>Vozila - Foreach petlja</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
            color: #333;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-bottom: 20px;
        }
        input, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #dff0d8;
            color: #3c763d;
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rad s vozilima</h1>

        <h2>Trenutni popis vozila:</h2>
        <ul>
            <?php foreach ($cars as $car): ?>
                <li><?php echo htmlspecialchars($car); ?></li>
            <?php endforeach; ?>
        </ul>

        <form method="post" action="">
            <label for="novoVozilo">Dodaj novo vozilo:</label>
            <input type="text" id="novoVozilo" name="novoVozilo" placeholder="Unesi naziv vozila" required>
            <button type="submit">Dodaj vozilo</button>
        </form>
    </div>
</body>
</html>
